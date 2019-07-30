kpi = {

	__construct() {

	},
	index: {

		init() {
			kpi.save_kpi._save_kpi()
			kpi.hasil_kpi._hasil_kpi()
		},

	},
	save_kpi: {

		init() {
			this._save_kpi()
		},
		_save_kpi(){
			let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
		    let finalUrl = baseUrl+"/"+"user"
		    
			$('#button-save-kpi').on('click',function(){
				let efektivitas_teknis_pekerjaan = $('input[name="efektivitas_teknis_pekerjaan"]').val()
				let ketepatan_teknis_pekerjaan   = $('input[name="ketepatan_teknis_pekerjaan"]').val()
				let kemampuan_teknis_pekerjaan   = $('input[name="kemampuan_teknis_pekerjaan"]').val()

				let tertib_nonteknis_pekerjaan   = $('input[name="tertib_nonteknis_pekerjaan"]').val()
				let inisiatif_nonteknis_pekerjaan= $('input[name="inisiatif_nonteknis_pekerjaan"]').val()
				let kerjasama_nonteknis_pekerjaan= $('input[name="kerjasama_nonteknis_pekerjaan"]').val()

				let perilaku_kepribadian         = $('input[name="perilaku_kepribadian"]').val()
				let kedisiplinan_kepribadian     = $('input[name="kedisiplinan_kepribadian"]').val()
				let tanggung_kepribadian         = $('input[name="tanggung_kepribadian"]').val()
				let ketaatan_kepribadian         = $('input[name="ketaatan_kepribadian"]').val()

				let inggris_keterampilan         = $('input[name="inggris_keterampilan"]').val()
				let excel_keterampilan           = $('input[name="excel_keterampilan"]').val()
				let msword_keterampilan          = $('input[name="msword_keterampilan"]').val()
				let indeks_keterampilan          = $('input[name="indeks_keterampilan"]').val()
				let dokumen_keterampilan         = $('input[name="dokumen_keterampilan"]').val()
				let pemahaman_keterampilan       = $('input[name="pemahaman_keterampilan"]').val()

				let sumTeknisPekerjaan           = parseFloat(efektivitas_teknis_pekerjaan) + parseFloat(ketepatan_teknis_pekerjaan) + parseFloat(kemampuan_teknis_pekerjaan)
				let sumNonTeknisPekerjaan        = parseFloat(tertib_nonteknis_pekerjaan) + parseFloat(inisiatif_nonteknis_pekerjaan) + parseFloat(kerjasama_nonteknis_pekerjaan)
				let sumKepribadian               = parseFloat(perilaku_kepribadian) + parseFloat(kedisiplinan_kepribadian) + parseFloat(tanggung_kepribadian) + parseFloat(ketaatan_kepribadian)
				let sumKeterampilan              = parseFloat(inggris_keterampilan) + parseFloat(excel_keterampilan) + parseFloat(msword_keterampilan) + parseFloat(indeks_keterampilan) + parseFloat(dokumen_keterampilan) + parseFloat(pemahaman_keterampilan)

	            let args = {
					karyawan_id	             : $('input[name="karyawan_id"]').val(),
					kpi_teknis_pekerjaan     : sumTeknisPekerjaan,
					kpi_nonteknis_pekerjaan  : sumNonTeknisPekerjaan,
					kpi_kepribadian          : sumKepribadian,
					kpi_keterampilan         : sumKeterampilan
				}
	            LIBS._ajax("kpi/save_kpi", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let save_kpi = $.parseJSON(res)
		                if (save_kpi.status == 1) {
		                    toastr['success'](save_kpi.pesan)
		                    setTimeout(() => { window.location.replace(finalUrl) }, 1000)
		                } else {
		                    toastr['error'](save_kpi.pesan)
		                }
					}
				})
	        })
		}
	},
	hasil_kpi: {

		init() {
			this._hasil_kpi()
		},
		_hasil_kpi() {
			LIBS._dataTableServerSide('#hasil-kpi-table','kpi/get_data_kpi')
		}
	},

}