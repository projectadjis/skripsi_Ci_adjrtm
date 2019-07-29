user = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableServerSide('#user-table','user/get_data_karyawan')
			this._toastr()
			user.save._save()
			
		},
		_toastr(){
			$('.adjis-toastr').click(function() {
	      	  toastr['success']('adjis')
	    	})
		}

	},
	save : {
		init() {
			this._save()
		},
		_save(){
			$('#adjis').on('click',function(){
	            let args = {
					karyawan_name	  : $('input[name="karyawan_name"]').val(),
					karyawan_position : $('input[name="karyawan_position"]').val()
				}
	            LIBS._ajax("user/save", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						var objek = $.parseJSON(res)
		                if (objek.status == 1) {
		                    $('#modaladd').modal('hide')
		                    toastr['success'](objek.pesan)
		                    setTimeout(() => { window.location.reload() }, 2000)
		                } else {
		                    toastr['error'](objek.pesan)
		                }
					}
				})
	        })
		}
	},

}