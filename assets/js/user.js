user = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#user-table')
			this._toastr()
			user.save._save()
			//console.log(window.location.origin + window.location.pathname + window.location.hash)
			// var getUrl = window.location;
			// var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
			// var coba    = "user/save"
			// console.log(baseUrl+"/"+coba)
			
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
		                    $('#modaladd').modal('hide');
		                    toastr['success'](objek.pesan)
		                    setTimeout(function () {
		                        //do something               
		                        location.reload(true);
		                    }, 2000);
		                } else {
		                    toastr['error'](objek.pesan)
		                }
					}
				})
	            return false;
	        })
		}
	}

}