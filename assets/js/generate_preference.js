generate_preference = {

	__construct() {

	},
	index: {

		init() {
			LIBS._datepicker()
			generate_preference.save_generate_preference._save_generate_preference()
		},

	},
	save_generate_preference: {

		init() {
			this._save_generate_preference()
		},
		_save_generate_preference() {
			let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
		    let finalUrl = baseUrl+"/"+"preference"

			$('#button-save-generate-preference').on('click',function(){
	            let args = {
					generate_preference_date : $('input[name="generate_preference_date"]').val()
				}
	            LIBS._ajax("generate/generate_preference/save_generate_preference", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let save_generate_preference = $.parseJSON(res)
		                if (save_generate_preference.status == 1) {
		                    toastr['success'](save_generate_preference.pesan)
		                    setTimeout(() => { window.location.replace(finalUrl) }, 1000)
		                } else {
		                    toastr['error'](save_generate_preference.pesan)
		                }
					}
				})
	        })
		}

	}

}