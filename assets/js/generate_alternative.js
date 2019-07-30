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
				// let a = $('input[name="date_generate_alternative"]').val()
				// let b = new Date(a)
				// console.log(b)
	            let args = {
					date_generate_alternative : $('input[name="date_generate_alternative"]').val()
				}
	            LIBS._ajax("generate/generate_alternative/save_generate_alternative", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						// let objek = $.parseJSON(res)
		    //             if (objek.status == 1) {
		    //                 toastr['success'](objek.pesan)
		    //                 setTimeout(() => { window.location.reload() }, 1000)
		    //             } else {
		    //                 toastr['error'](objek.pesan)
		    //             }
					}
				})
	        })
		}

	}

}