generate_alternative = {

	__construct() {

	},
	index: {

		init() {
			LIBS._datepicker()
			generate_alternative.save_generate_alternative._save_generate_alternative()
		},

	},
	save_generate_alternative: {

		init() {
			this._save_generate_alternative()
		},
		_save_generate_alternative() {
			$('#button-save-generate-alternative').on('click',function(){
	            let args = {
					generate_alternative_date : $('input[name="generate_alternative_date"]').val()
				}
	            LIBS._ajax("generate/generate_alternative/save_generate_alternative", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let save_generate_alternative = $.parseJSON(res)
		                if (save_generate_alternative.status == 1) {
		                    toastr['success'](save_generate_alternative.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](save_generate_alternative.pesan)
		                }
					}
				})
	        })
		}

	}

}