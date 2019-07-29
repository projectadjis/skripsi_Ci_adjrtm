user = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableServerSide('#user-table','user/get_data_karyawan')
			this._toastr()
			this._modalDelete('#user-table','.delete_record','karyawan-id','#modalDelete','input[name="karyawan_id"]')
			//this._sweetAlert()
			user.save._save()
			user.delete._delete()
			
		},
		_toastr(){
			$('.adjis-toastr').click(function() {
	      	  toastr['success']('adjis')
	    	})
		},
		_modalDelete(parameter, parameterClass, parameterData, modalHapusID, inputFormTarget) {
			$(parameter).on('click',parameterClass,function(){
	            let employee_nik=$(this).data(parameterData)
	            $(modalHapusID).modal('show')
	            $(inputFormTarget).val(employee_nik)
	        })
		},
		// _sweetAlert() {
		// 	$('#user-table').on('click','.sweet-6',function(){
		//         swal({
		//             title: "Are you sure?",
		//             text: "You will not be able to recover this imaginary file!",
		//             type: 'warning',
		//             showCancelButton: true,
		//             confirmButtonClass: 'btn-danger',
		//             confirmButtonText: 'Yes, delete it!',
		//             closeOnConfirm: false,
		//         },function(){
		//             swal("Deleted!", "Your imaginary file has been deleted.", "success")
		//         })
		//     })
		// }

	},
	save : {
		init() {
			this._save()
		},
		_save(){
			$('#button-save').on('click',function(){
	            let args = {
					karyawan_name	  : $('input[name="karyawan_name"]').val(),
					karyawan_position : $('input[name="karyawan_position"]').val()
				}
	            LIBS._ajax("user/save", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let objek = $.parseJSON(res)
		                if (objek.status == 1) {
		                    $('#modaladd').modal('hide')
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
					karyawan_id	  : $('input[name="karyawan_id"]').val()
				}
	            LIBS._ajax("user/delete", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						console.log(res)
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