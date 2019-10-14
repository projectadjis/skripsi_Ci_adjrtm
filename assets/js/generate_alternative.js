generate_alternative = {

	__construct() {

	},
	index: {

		init() {
			LIBS._datepicker()
			generate_alternative.check_done_kpi._check_done_kpi()
		},
	},
	save_generate_alternative: {

		init() {
			this._save_generate_alternative()
		},
		_save_generate_alternative() {
			let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
		    let finalUrl = baseUrl+"/"+"alternative"
            let args = {
				generate_alternative_date : $('input[name="generate_alternative_date"]').val()
			}
            LIBS._ajax("generate/generate_alternative/save_generate_alternative", LIBS._jsonToQueryString(args)).done((res) => {
				if (res) {
					let save_generate_alternative = $.parseJSON(res)
	                if (save_generate_alternative.status == 1) {
	                    toastr['success'](save_generate_alternative.pesan)
	                    setTimeout(() => { window.location.replace(finalUrl) }, 1000)
	                } else {
	                    toastr['error'](save_generate_alternative.pesan)
	                }
				}
			})
		}
	},
	check_generate_alternative: {

		init() {
			this._check_generate_alternative()
		},
		_check_generate_alternative() {
            LIBS._ajax("generate/generate_alternative/check_generate_alternative").done((check) => {
				if (check) {
					let check_generate_alternative = $.parseJSON(check)
	                if (check_generate_alternative.status == 1) {
	                    toastr['error'](check_generate_alternative.pesan)
	                    return false
	                } else if (check_generate_alternative.status == 0) {
	                    generate_alternative.save_generate_alternative._save_generate_alternative()
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
            LIBS._ajax("generate/generate_alternative/check_available_weight_criteria").done((check) => {
				if (check) {
					let check_available_weight_criteria = $.parseJSON(check)
	                if (check_available_weight_criteria.status == 1) {
	                    toastr['error'](check_available_weight_criteria.pesan)
	                    return false
	                } else if (check_available_weight_criteria.status == 0) {
	                    generate_alternative.check_generate_alternative._check_generate_alternative()
	                }
				}
			})
		}
	},
	check_done_kpi: {

		init() {
			this._check_done_kpi()
		},
		_check_done_kpi() {
			$('#button-save-generate-alternative').on('click',function(){
	            LIBS._ajax("generate/generate_alternative/check_done_kpi").done((check) => {
					if (check) {
						let check_done_kpi = $.parseJSON(check)
		                if (check_done_kpi.status == 1) {
		                    toastr['error'](check_done_kpi.pesan)
		                    return false
		                } else if (check_done_kpi.status == 0) {
		                    generate_alternative.check_available_weight_criteria._check_available_weight_criteria()
		                }
					}
				})
	        })
		}
	}

}