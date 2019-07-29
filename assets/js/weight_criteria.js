weight_criteria = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#weight-criteria')
			weight_criteria.save._save()
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

}