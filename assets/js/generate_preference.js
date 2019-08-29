generate_preference = {

	__construct() {

	},
	index: {

		init() {
			LIBS._datepicker()
			generate_preference.check_available_weight_criteria._check_available_weight_criteria()
		},

	},
	save_generate_preference: {

		init() {
			this._save_generate_preference()
		},
		_save_generate_preference() {
			let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
		    let finalUrl = baseUrl+"/"+"preference"
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
		}
	},
	check_available_weight_criteria: {

		init() {
			this._check_available_weight_criteria()
		},
		_check_available_weight_criteria() {
			$('#button-save-generate-preference').on('click',function(){
	            LIBS._ajax("generate/generate_preference/check_available_weight_criteria").done((check) => {
					if (check) {
						let check_available_weight_criteria = $.parseJSON(check)
		                if (check_available_weight_criteria.status == 1) {
		                    toastr['warning'](check_available_weight_criteria.pesan)
		                    return false
		                } else if (check_available_weight_criteria.status == 0) {
		                    generate_preference.check_generate_preference._check_generate_preference()
		                }
					}
				})
	        })
		}
	},
	check_generate_preference: {

		init() {
			this._check_generate_preference()
		},
		_check_generate_preference() {
            LIBS._ajax("generate/generate_preference/check_generate_preference").done((check) => {
				if (check) {
					let check_generate_preference = $.parseJSON(check)
	                if (check_generate_preference.status == 1) {
	                    toastr['error'](check_generate_preference.pesan)
	                    return false
	                } else if (check_generate_preference.status == 2) {
	                    toastr['error'](check_generate_preference.pesan)
	                    return false
	                } else if (check_generate_preference.status == 0) {
	                    generate_preference.save_generate_preference._save_generate_preference()
	                }
				}
			})
		}
	}

}