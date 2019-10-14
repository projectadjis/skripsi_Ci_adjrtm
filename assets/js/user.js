user = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableServerSide('#user-table','user/get_data_user')
			LIBS._modalDelete('#user-table','.delete_record','user-id','#modalDelete','input[name="user_id"]')
			LIBS._select2()
			LIBS._buttonReset('input[name="user_name"]', '#user_position')
			this._modalUpdateUser()
			this._kpi()
			this._setValueuserRight()
			//this._sweetAlert()
			user.save._save()
			user.update._update()
			user.delete._delete()
			
		},
		_modalUpdateUser(){
			$('#user-table').on('click','.edit_record',function(){
	            let user_id       = $(this).data('user_id')
	            let user_name     = $(this).data('user_name')
	            let position_id   = $(this).data('position_id')
	            
	            $('#modalUpdate').modal('show')
	            $('input[name="user_id_edit"]').val(user_id)
	            $('input[name="user_name_edit"]').val(user_name)
	            //$('select[name="user_position_edit"]').data(position_id)
	            $('select[name="user_position_edit"]').select2('data', {id: position_id, text: position_id});
	            
	            
	            // let adjis = CryptoJS.AES.encrypt("KUDA", "ADJIS RAMADHANI UTOMO")
	            // console.log(adjis)
	        })
		},
		_kpi(){
			$('#user-table').on('click','.kpi_record',function(){
	            let data = $(this).data('user_id')
				let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
				let finalUrl = baseUrl+"/"+"kpi/?user_id="+data
	            window.location.replace(finalUrl)
	        })
		},
		_setValueuserRight(){
			$('select[name="user_position"]').on('change', function (e) {
				let el = $(this).val()
				if (el == 'Lead Staff Adm' || el == 'Lead VPC' || el == 'Lead Buyer' || el == 'Lead Docon' || el == 'Lead TKDN') {
					let right = 1
					$('input[name="user_right"]').val(right)
				} else {
					let right = 2
					$('input[name="user_right"]').val(right)
				}
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
			$('#button-save').on('click',function(e){
				let user_name	  = $('input[name="user_name"]')
				let user_position = $('select[name="user_position"]')
				let user_right    = $('input[name="user_right"]').val()

				if (LIBS._modalValidation(user_name.val(), user_name.attr("title"), 'input[name="user_name"]') == false || LIBS._modalValidation(user_position.val(), user_position.attr("title"), 'select[name="user_position"]','.select2') == false){
					e.stopPropagation()
				} else {    
		            let args = {
						user_name	  : user_name.val(),
						position_id   : user_position.val(),
						user_right    : user_right
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
	        	}
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
					user_id	  : $('input[name="user_id"]').val()
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
					user_id	      : $('input[name="user_id_edit"]').val(),
					user_name	  : $('input[name="user_name_edit"]').val(),
					user_position : $('select[name="user_position_edit"]').val()
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