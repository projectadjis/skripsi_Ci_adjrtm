weight_alternative = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTableAlternative('#aspek-teknis-pekerjaan-table', '#add-teknis-pekerjaan')
	  		LIBS._dataTableAlternative('#aspek-nonteknis-pekerjaan-table', '#add-nonteknis-pekerjaan')
	  		LIBS._dataTableAlternative('#aspek-kepribadian-table', '#add-kepribadian')
	  		LIBS._dataTableAlternative('#aspek-keterampilan-table', '#add-keterampilan')
	  		LIBS._modalDelete('#aspek-teknis-pekerjaan-table','.delete_record_weight_alternative_aspek_teknis_pekerjaan','weight-alternative-aspek-teknis-pekerjaan-id','#modalDeleteAspekTeknisPekerjaan','input[name="weight_alternative_aspek_teknis_pekerjaan_id"]')
	  		LIBS._modalDelete('#aspek-nonteknis-pekerjaan-table','.delete_record_weight_alternative_aspek_nonteknis_pekerjaan','weight-alternative-aspek-nonteknis-pekerjaan-id','#modalDeleteAspekNonTeknisPekerjaan','input[name="weight_alternative_aspek_nonteknis_pekerjaan_id"]')
	  		LIBS._modalDelete('#aspek-kepribadian-table','.delete_record_weight_alternative_aspek_kepribadian','weight-alternative-aspek-kepribadian-id','#modalDeleteAspekKepribadian','input[name="weight_alternative_aspek_kepribadian_id"]')
	  		LIBS._modalDelete('#aspek-keterampilan-table','.delete_record_weight_alternative_aspek_keterampilan','weight-alternative-aspek-keterampilan-id','#modalDeleteAspekKeterampilan','input[name="weight_alternative_aspek_keterampilan_id"]')
	  		weight_alternative.save_teknis_pekerjaan._save_teknis_pekerjaan()
	  		weight_alternative.save_nonteknis_pekerjaan._save_nonteknis_pekerjaan()
	  		weight_alternative.save_kepribadian._save_kepribadian()
	  		weight_alternative.save_keterampilan._save_keterampilan()
	  		weight_alternative.delete_teknis_pekerjaan._delete_teknis_pekerjaan()
	  		weight_alternative.delete_nonteknis_pekerjaan._delete_nonteknis_pekerjaan()
	  		weight_alternative.delete_kepribadian._delete_kepribadian()
	  		weight_alternative.delete_keterampilan._delete_keterampilan()
		},
	},
	save_teknis_pekerjaan: {

		init() {
			this._save_teknis_pekerjaan()
		},
		_save_teknis_pekerjaan(){
			$('#button-save-teknispekerjaan').on('click',function(){
	            let args = {
					weight_alternative_aspek_teknis_pekerjaan_rangedown : $('input[name="weight_alternative_aspek_teknis_pekerjaan_rangedown"]').val(),
					weight_alternative_aspek_teknis_pekerjaan_rangeup   : $('input[name="weight_alternative_aspek_teknis_pekerjaan_rangeup"]').val(),
					weight_alternative_aspek_teknis_pekerjaan_score     : $('input[name="weight_alternative_aspek_teknis_pekerjaan_score"]').val(),
					weight_alternative_aspek_teknis_pekerjaan_unique    : 1
				}
	            LIBS._ajax("weight/weight_alternative/save_teknis_pekerjaan", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let objek = $.parseJSON(res)
		                if (objek.status == 1) {
		                    $('#modalAddTeknisPekerjaan').modal('hide')
		                    toastr['success'](objek.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](objek.pesan)
		                }
					}
				})
	        })
		}
	},
	save_nonteknis_pekerjaan: {

		init() {
			this._save_nonteknis_pekerjaan()
		},
		_save_nonteknis_pekerjaan(){
			$('#button-save-nonteknispekerjaan').on('click',function(){
	            let args = {
					weight_alternative_aspek_nonteknis_pekerjaan_rangedown : $('input[name="weight_alternative_aspek_nonteknis_pekerjaan_rangedown"]').val(),
					weight_alternative_aspek_nonteknis_pekerjaan_rangeup   : $('input[name="weight_alternative_aspek_nonteknis_pekerjaan_rangeup"]').val(),
					weight_alternative_aspek_nonteknis_pekerjaan_score     : $('input[name="weight_alternative_aspek_nonteknis_pekerjaan_score"]').val(),
					weight_alternative_aspek_nonteknis_pekerjaan_unique    : 2
				}
	            LIBS._ajax("weight/weight_alternative/save_nonteknis_pekerjaan", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let objek = $.parseJSON(res)
		                if (objek.status == 1) {
		                    $('#modalAddNonTeknisPekerjaan').modal('hide')
		                    toastr['success'](objek.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](objek.pesan)
		                }
					}
				})
	        })
		}
	},
	save_kepribadian: {

		init() {
			this._save_kepribadian()
		},
		_save_kepribadian(){
			$('#button-save-kepribadian').on('click',function(){
	            let args = {
					weight_alternative_aspek_kepribadian_rangedown : $('input[name="weight_alternative_aspek_kepribadian_rangedown"]').val(),
					weight_alternative_aspek_kepribadian_rangeup   : $('input[name="weight_alternative_aspek_kepribadian_rangeup"]').val(),
					weight_alternative_aspek_kepribadian_score     : $('input[name="weight_alternative_aspek_kepribadian_score"]').val(),
					weight_alternative_aspek_kepribadian_unique    : 3
				}
	            LIBS._ajax("weight/weight_alternative/save_kepribadian", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let objek = $.parseJSON(res)
		                if (objek.status == 1) {
		                    $('#modalAddKepribadian').modal('hide')
		                    toastr['success'](objek.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](objek.pesan)
		                }
					}
				})
	        })
		}
	},
	save_keterampilan: {

		init() {
			this._save_keterampilan()
		},
		_save_keterampilan(){
			$('#button-save-keterampilan').on('click',function(){
	            let args = {
					weight_alternative_aspek_keterampilan_rangedown : $('input[name="weight_alternative_aspek_keterampilan_rangedown"]').val(),
					weight_alternative_aspek_keterampilan_rangeup   : $('input[name="weight_alternative_aspek_keterampilan_rangeup"]').val(),
					weight_alternative_aspek_keterampilan_score     : $('input[name="weight_alternative_aspek_keterampilan_score"]').val(),
					weight_alternative_aspek_keterampilan_unique    : 4
				}
	            LIBS._ajax("weight/weight_alternative/save_keterampilan", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let objek = $.parseJSON(res)
		                if (objek.status == 1) {
		                    $('#modalAddKeterampilan').modal('hide')
		                    toastr['success'](objek.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](objek.pesan)
		                }
					}
				})
	        })
		}
	},
	delete_teknis_pekerjaan : {
		init() {
			this._delete_teknis_pekerjaan()
		},
		_delete_teknis_pekerjaan(){
			$('#button-delete-aspek-teknis-pekerjaan').on('click',function(){
	            let args = {
					weight_alternative_aspek_teknis_pekerjaan_id	  : $('input[name="weight_alternative_aspek_teknis_pekerjaan_id"]').val()
				}
	            LIBS._ajax("weight/weight_alternative/delete_teknis_pekerjaan", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let delete_teknis_pekerjaan = $.parseJSON(res)
		                if (delete_teknis_pekerjaan.status == 1) {
		                    $('#modalDeleteAspekTeknisPekerjaan').modal('hide')
		                    toastr['success'](delete_teknis_pekerjaan.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](delete_teknis_pekerjaan.pesan)
		                }
					}
				})
	        })
	  		
		}
	},
	delete_nonteknis_pekerjaan : {
		init() {
			this._delete_nonteknis_pekerjaan()
		},
		_delete_nonteknis_pekerjaan(){
			$('#button-delete-aspek-nonteknis-pekerjaan').on('click',function(){
	            let args = {
					weight_alternative_aspek_nonteknis_pekerjaan_id	  : $('input[name="weight_alternative_aspek_nonteknis_pekerjaan_id"]').val()
				}
	            LIBS._ajax("weight/weight_alternative/delete_nonteknis_pekerjaan", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let delete_nonteknis_pekerjaan = $.parseJSON(res)
		                if (delete_nonteknis_pekerjaan.status == 1) {
		                    $('#modalDeleteAspekNonTeknisPekerjaan').modal('hide')
		                    toastr['success'](delete_nonteknis_pekerjaan.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](delete_nonteknis_pekerjaan.pesan)
		                }
					}
				})
	        })
	  		
		}
	},
	delete_kepribadian : {
		init() {
			this._delete_kepribadian()
		},
		_delete_kepribadian(){
			$('#button-delete-aspek-kepribadian').on('click',function(){
	            let args = {
					weight_alternative_aspek_kepribadian_id	  : $('input[name="weight_alternative_aspek_kepribadian_id"]').val()
				}
	            LIBS._ajax("weight/weight_alternative/delete_kepribadian", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let delete_kepribadian = $.parseJSON(res)
		                if (delete_kepribadian.status == 1) {
		                    $('#modalDeleteAspekKepribadian').modal('hide')
		                    toastr['success'](delete_kepribadian.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](delete_kepribadian.pesan)
		                }
					}
				})
	        })
	  		
		}
	},
	delete_keterampilan : {
		init() {
			this._delete_keterampilan()
		},
		_delete_keterampilan(){
			$('#button-delete-aspek-keterampilan').on('click',function(){
	            let args = {
					weight_alternative_aspek_keterampilan_id	  : $('input[name="weight_alternative_aspek_keterampilan_id"]').val()
				}
	            LIBS._ajax("weight/weight_alternative/delete_keterampilan", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let delete_keterampilan = $.parseJSON(res)
		                if (delete_keterampilan.status == 1) {
		                    $('#modalDeleteAspekKeterampilan').modal('hide')
		                    toastr['success'](delete_keterampilan.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](delete_keterampilan.pesan)
		                }
					}
				})
	        })
	  		
		}
	},

}