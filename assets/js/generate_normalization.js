generate_normalization = {

	__construct() {

	},
	index: {

		init() {
			LIBS._datepicker()
			generate_normalization.check_generate_normalization._check_generate_normalization()
		},

	},
	save_generate_normalization: {

		init() {
			this._save_generate_normalization()
		},
		_save_generate_normalization() {
			let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
		    let finalUrl = baseUrl+"/"+"normalization"
            let args = {
				generate_normalization_date : $('input[name="generate_normalization_date"]').val()
			}
            LIBS._ajax("generate/generate_normalization/save_generate_normalization", LIBS._jsonToQueryString(args)).done((res) => {
				if (res) {
					let save_generate_normalization = $.parseJSON(res)
	                if (save_generate_normalization.status == 1) {
	                    toastr['success'](save_generate_normalization.pesan)
	                    setTimeout(() => { window.location.replace(finalUrl) }, 1000)
	                } else {
	                    toastr['error'](save_generate_normalization.pesan)
	                }
				}
			})
		}
	},
	check_generate_normalization: {

		init() {
			this._check_generate_normalization()
		},
		_check_generate_normalization() {
			$('#button-save-generate-normalization').on('click',function(){
	            LIBS._ajax("generate/generate_normalization/check_generate_normalization").done((check) => {
					if (check) {
						let check_generate_normalization = $.parseJSON(check)
		                if (check_generate_normalization.status == 1) {
		                    toastr['error'](check_generate_normalization.pesan)
		                    return false
		                } else if (check_generate_normalization.status == 0) {
		                    generate_normalization.save_generate_normalization._save_generate_normalization()
		                }
					}
				})
	        })
		}
	}

}