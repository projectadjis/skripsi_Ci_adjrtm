user = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableServerSide('#user-table','user/get_data_karyawan')
			LIBS._modalDelete('#user-table','.delete_record','karyawan-id','#modalDelete','input[name="karyawan_id"]')
			this._modalUpdateUser()
			//this._sweetAlert()
			user.save._save()
			user.update._update()
			user.delete._delete()
			
		},
		_modalUpdateUser(){
			$('#user-table').on('click','.edit_record',function(){
	            let karyawan_id       =$(this).data('karyawan_id')
	            let karyawan_name     =$(this).data('karyawan_name')
	            let karyawan_position =$(this).data('karyawan_position')
	            $('#modalUpdate').modal('show')
	            $('input[name="karyawan_id_edit"]').val(karyawan_id)
	            $('input[name="karyawan_name_edit"]').val(karyawan_name)
	            $('input[name="karyawan_position_edit"]').val(karyawan_position)
	        })
		}
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
					karyawan_id	  : $('input[name="karyawan_id"]').val()
				}
	            LIBS._ajax("user/delete", LIBS._jsonToQueryString(args)).done((res) => {
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
	update : {
		init() {
			this._update()
		},
		_update(){
			$('#button-update').on('click',function(){
	            let args = {
					karyawan_id	      : $('input[name="karyawan_id_edit"]').val(),
					karyawan_name	  : $('input[name="karyawan_name_edit"]').val(),
					karyawan_position : $('input[name="karyawan_position_edit"]').val()
				}
	            LIBS._ajax("user/update", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let update = $.parseJSON(res)
		                if (update.status == 1) {
		                    $('#modalUpdate').modal('hide')
		                    toastr['success'](update.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](update.pesan)
		                }
					}
				})
	        })
		}
	},

}