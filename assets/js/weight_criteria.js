weight_criteria = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableCriteria('#weight-criteria')
			LIBS._modalDelete('#weight-criteria','.delete_record','weight-criteria-id','#modalDelete','input[name="weight_criteria_id"]')
			weight_criteria.save._save()
			weight_criteria.delete._delete()
			weight_criteria.check_criteria._check_criteria()
			weight_criteria.stop_criteria._stop_criteria()

		},
	},
	save: {

		init() {
			this._save()
		},
		_save(){
			$('#button-save').on('click',function(){
				let weight_criteria_teknispekerjaan    = $('input[name="weight_criteria_teknispekerjaan"]').val()
				let weight_criteria_nonteknispekerjaan = $('input[name="weight_criteria_nonteknispekerjaan"]').val()
				let weight_criteria_kepribadian        = $('input[name="weight_criteria_kepribadian"]').val()
				let weight_criteria_keterampilan       = $('input[name="weight_criteria_keterampilan"]').val()
				
	            let args = {
					weight_criteria_teknispekerjaan	  : weight_criteria_teknispekerjaan / 100,
					weight_criteria_nonteknispekerjaan: weight_criteria_nonteknispekerjaan / 100,
					weight_criteria_kepribadian	      : weight_criteria_kepribadian / 100,
					weight_criteria_keterampilan	  : weight_criteria_keterampilan / 100
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
	        })
		}
	},
	delete : {
		init() {
			this._delete()
		},
		_delete(){
			$('#button-delete').on('click',function(){
	            let args = {
					weight_criteria_id	  : $('input[name="weight_criteria_id"]').val()
				}
	            LIBS._ajax("weight/weight_criteria/delete", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let hapus = $.parseJSON(res)
		                if (hapus.status == 1) {
		                    $('#modalDelete').modal('hide')
		                    toastr['success'](hapus.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](hapus.pesan)
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