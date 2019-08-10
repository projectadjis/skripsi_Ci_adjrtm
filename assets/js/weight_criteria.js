weight_criteria = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableCriteria('#weight-criteria')
			LIBS._modalDelete('#weight-criteria','.delete_record','weight-criteria-id','#modalDelete','input[name="weight_criteria_id"]')

			weight_criteria.save._save()
			weight_criteria.check_criteria._check_criteria()
			weight_criteria.stop_criteria._stop_criteria()
			weight_criteria.check_before_delete_criteria._check_before_delete_criteria()
		},
	},
	save: {

		init() {
			this._save()
		},
		_save(){
			$('#button-save').on('click',function(e){
				let weight_criteria_unique             = $('input[name="weight_criteria_unique"]')
				let weight_criteria_teknispekerjaan    = $('input[name="weight_criteria_teknispekerjaan"]')
				let weight_criteria_nonteknispekerjaan = $('input[name="weight_criteria_nonteknispekerjaan"]')
				let weight_criteria_kepribadian        = $('input[name="weight_criteria_kepribadian"]')
				let weight_criteria_keterampilan       = $('input[name="weight_criteria_keterampilan"]')

				if (LIBS._modalValidation(weight_criteria_unique.val(), weight_criteria_unique.attr("title")) == false || LIBS._modalValidation(weight_criteria_teknispekerjaan.val(), weight_criteria_teknispekerjaan.attr("title")) == false ||  LIBS._modalValidation(weight_criteria_nonteknispekerjaan.val(), weight_criteria_nonteknispekerjaan.attr("title")) == false || LIBS._modalValidation(weight_criteria_keterampilan.val(), weight_criteria_keterampilan.attr("title")) == false || LIBS._modalValidation(weight_criteria_kepribadian.val(), weight_criteria_kepribadian.attr("title")) == false){
					e.stopPropagation()
				} else {
				  let totalWeightCriteria = parseFloat(weight_criteria_teknispekerjaan.val() + parseFloat(weight_criteria_nonteknispekerjaan.val()) + parseFloat(weight_criteria_kepribadian.val()) + parseFloat(weight_criteria_keterampilan.val())) 

				  if (totalWeightCriteria > 100) {
				  		toastr['warning']('Total Value Can not greater than 100')
				  		return false
				  } else {
			            let args = {
			            	weight_criteria_unique	          : weight_criteria_unique.val(),
							weight_criteria_teknispekerjaan	  : weight_criteria_teknispekerjaan.val() / 100,
							weight_criteria_nonteknispekerjaan: weight_criteria_nonteknispekerjaan.val() / 100,
							weight_criteria_kepribadian	      : weight_criteria_kepribadian.val() / 100,
							weight_criteria_keterampilan	  : weight_criteria_keterampilan.val() / 100
						}
			            LIBS._ajax("weight/weight_criteria/save", LIBS._jsonToQueryString(args)).done((res) => {
							if (res) {
								let objek = $.parseJSON(res)
				                if (objek.status == 1) {
				                    $('#modalAdd').modal('hide')
				                    toastr['success'](objek.pesan)
				                    setTimeout(() => { window.location.reload() }, 1000)
				                } else {
				                    toastr['error'](objek.pesan)
				                }
							}
						})
		        	}
				}
	        })
		}
	},
	delete : {
		init() {
			this._delete()
		},
		_delete(){
            let args = {
				weight_criteria_id	  : $('input[name="weight_criteria_id"]').val()
			}
            LIBS._ajax("weight/weight_criteria/delete", LIBS._jsonToQueryString(args)).done((res) => {
				if (res) {
					let deleteCriteria = $.parseJSON(res)
	                if (deleteCriteria.status == 1) {
	                    $('#modalDelete').modal('hide')
	                    toastr['success'](deleteCriteria.pesan)
	                    setTimeout(() => { window.location.reload() }, 1000)
	                } else {
	                    toastr['error'](deleteCriteria.pesan)
	                }
				}
			})
		}
	},
	check_before_delete_criteria : {
		init() {
			this._check_before_delete_criteria()
		},
		_check_before_delete_criteria(){
			$('#button-delete').on('click',function(){
	            let args = {
					weight_criteria_id	  : $('input[name="weight_criteria_id"]').val()
				}
	            LIBS._ajax("weight/weight_criteria/check_before_delete_criteria", LIBS._jsonToQueryString(args)).done((check) => {
					if (check) {
						let check_before_delete_criteria = $.parseJSON(check)
		                if (check_before_delete_criteria.status == 1) {
		                    toastr['error'](check_before_delete_criteria.pesan)
		                    return false
		                } else {
		                    weight_criteria.delete._delete()
		                }
					}
				})
	        })
		}
	},
	use_criteria : {
		init() {
			this._use_criteria()
		},
		_use_criteria(classButton){
				let args = {
					weight_criteria_id	  : classButton.data('weight-criteria-id')
				}

				LIBS._ajax("weight/weight_criteria/use_criteria", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let use_criteria = $.parseJSON(res)
		                if (use_criteria.status == 1) {
		                    toastr['success'](use_criteria.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](use_criteria.pesan)
		                }
					} else {
						return false
					}
				})
		}
	},
	stop_criteria : {
		init() {
			this._stop_criteria()
		},
		_stop_criteria(){
			$('.stop_record').on('click',function(){

	            let args = {
					weight_criteria_id	  : $(this).data('weight-criteria-id')
				}
	            LIBS._ajax("weight/weight_criteria/stop_criteria", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let stop_criteria = $.parseJSON(res)
		                if (stop_criteria.status == 1) {
		                    toastr['success'](stop_criteria.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](stop_criteria.pesan)
		                }
					}
				})
	        })
		}
	},
	check_criteria : {
		init() {
			this._check_criteria()
		},
		_check_criteria(){
			$('.use_record').on('click',function(){
				LIBS._ajax("weight/weight_criteria/check_criteria").done((check) => {
					if (check) {
						let check_criteria = $.parseJSON(check)
		                if (check_criteria.status == 1) {
		                    toastr['warning'](check_criteria.pesan)
		                    return false
		                } 
		                else if (check_criteria.status == 0) {
		                	let valueButton = $(this)
		                	weight_criteria.use_criteria._use_criteria(valueButton)
		                }
					}
				})
	        })
		}
	},


}