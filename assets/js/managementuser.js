managementuser = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#managementuser-table')
			LIBS._modalDelete('#managementuser-table','.right_record','karyawan-id','#modalRight','input[name="karyawan_id"]')
			
			managementuser.save._save()
		},
	},
	save : {
		init() {
			this._save()
		},
		_save(){
			$('#button-save').on('click',function(e){
				let managementUserUsername	   = $('input[name="managementuser_username"]')
				let managementUserPassword     = $('input[name="managementuser_password"]')

				if (LIBS._modalValidation(managementUserUsername.val(), managementUserUsername.attr("title"), 'input[name="managementuser_username"]') == false || LIBS._modalValidation(managementUserPassword.val(), managementUserPassword.attr("title"), 'input[name="managementuser_password"]') == false ){
					e.stopPropagation()
				} else {    
		            let args = {
						managementuser_username	  : managementUserUsername.val(),
						managementuser_password   : managementUserPassword.val(),
						karyawan_id    			  : $('input[name="karyawan_id"]').val()
					}
		            LIBS._ajax("managementuser/save", LIBS._jsonToQueryString(args)).done((res) => {
						if (res) {
							let save = $.parseJSON(res)
			                if (save.status == 1) {
			                    $('#modalRight').modal('hide')
			                    toastr['success'](save.pesan)
			                    setTimeout(() => { window.location.reload() }, 1000)
			                } else {
			                    toastr['error'](save.pesan)
			                }
						}
					})
	        	}
	        })
		}
	},

}