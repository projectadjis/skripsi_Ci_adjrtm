weight_criteria = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#weight-criteria')
			LIBS._modalDelete('#weight-criteria','.delete_record','weight-criteria-id','#modalDelete','input[name="weight_criteria_id"]')
			weight_criteria.save._save()
			weight_criteria.delete._delete()
			weight_criteria.use_criteria._use_criteria()
			weight_criteria.stop_criteria._stop_criteria()

		},

	},
	save: {

		init() {
			this._save()
		},
		_save(){
			$('#button-save').on('click',function(){
	            let args = {
					weight_criteria_teknispekerjaan	  : $('input[name="weight_criteria_teknispekerjaan"]').val(),
					weight_criteria_nonteknispekerjaan: $('input[name="weight_criteria_nonteknispekerjaan"]').val(),
					weight_criteria_kepribadian	      : $('input[name="weight_criteria_kepribadian"]').val(),
					weight_criteria_keterampilan	  : $('input[name="weight_criteria_keterampilan"]').val()
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
		_use_criteria(){
			$('.use_record').on('click',function(){

	            let args = {
					weight_criteria_id	  : $(this).data('weight-criteria-id')
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
					}
				})
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


}