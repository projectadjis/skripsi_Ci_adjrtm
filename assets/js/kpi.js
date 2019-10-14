kpi = {

	__construct() {

	},
	index: {

		init() {
			kpi.save_kpi._save_kpi()
			kpi.hasil_kpi._hasil_kpi()

			LIBS._buttonReset('input[name="efektivitas_teknis_pekerjaan"]')
			LIBS._buttonReset('input[name="ketepatan_teknis_pekerjaan"]')
			LIBS._buttonReset('input[name="kemampuan_teknis_pekerjaan"]')
			LIBS._buttonReset('input[name="tertib_nonteknis_pekerjaan"]')
			LIBS._buttonReset('input[name="inisiatif_nonteknis_pekerjaan"]')
			LIBS._buttonReset('input[name="kerjasama_nonteknis_pekerjaan"]')
			LIBS._buttonReset('input[name="perilaku_kepribadian"]')
			LIBS._buttonReset('input[name="kedisiplinan_kepribadian"]')
			LIBS._buttonReset('input[name="tanggung_kepribadian"]')
			LIBS._buttonReset('input[name="ketaatan_kepribadian"]')
			LIBS._buttonReset('input[name="inggris_keterampilan"]')
			LIBS._buttonReset('input[name="excel_keterampilan"]')
			LIBS._buttonReset('input[name="msword_keterampilan"]')
			LIBS._buttonReset('input[name="indeks_keterampilan"]')
			LIBS._buttonReset('input[name="dokumen_keterampilan"]')
			LIBS._buttonReset('input[name="pemahaman_keterampilan"]')
		},

	},
	save_kpi: {

		init() {
			this._save_kpi()
		},
		_save_kpi(){
			let baseUrl  = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1]
		    let finalUrl = baseUrl+"/"+"user"
		    
			$('#button-save-kpi').on('click',function(stop){
				/* teknis pekerjaan */
				let a                            = $('input[name="efektivitas_teknis_pekerjaan"]')
				let b                            = $('input[name="ketepatan_teknis_pekerjaan"]')
				let c                            = $('input[name="kemampuan_teknis_pekerjaan"]')
				let efektivitas_teknis_pekerjaan = a.val()
				let ketepatan_teknis_pekerjaan   = b.val()
				let kemampuan_teknis_pekerjaan   = c.val()

				/* non-teknis pekerjaan */
				let d                            = $('input[name="tertib_nonteknis_pekerjaan"]')
				let e                            = $('input[name="inisiatif_nonteknis_pekerjaan"]')
				let f 							 = $('input[name="kerjasama_nonteknis_pekerjaan"]')
				let tertib_nonteknis_pekerjaan   = d.val()
				let inisiatif_nonteknis_pekerjaan= e.val()
				let kerjasama_nonteknis_pekerjaan= f.val()

				/* kepribadian */
				let g                            = $('input[name="perilaku_kepribadian"]')
				let h                            = $('input[name="kedisiplinan_kepribadian"]')
				let i 							 = $('input[name="tanggung_kepribadian"]')
				let j                            = $('input[name="ketaatan_kepribadian"]')
				let perilaku_kepribadian         = g.val()
				let kedisiplinan_kepribadian     = h.val()
				let tanggung_kepribadian         = i.val()
				let ketaatan_kepribadian         = j.val()

				/* keterampilan */
				let k                            = $('input[name="inggris_keterampilan"]')
				let l                            = $('input[name="excel_keterampilan"]')
				let m 							 = $('input[name="msword_keterampilan"]')
				let n                            = $('input[name="indeks_keterampilan"]')
				let o 							 = $('input[name="dokumen_keterampilan"]')
				let p                            = $('input[name="pemahaman_keterampilan"]')
				let inggris_keterampilan         = k.val()
				let excel_keterampilan           = l.val()
				let msword_keterampilan          = m.val()
				let indeks_keterampilan          = n.val()
				let dokumen_keterampilan         = o.val()
				let pemahaman_keterampilan       = p.val()

				/* penjumlahan masing-masing kriteria */
				let sumTeknisPekerjaan           = parseFloat(efektivitas_teknis_pekerjaan) + parseFloat(ketepatan_teknis_pekerjaan) + parseFloat(kemampuan_teknis_pekerjaan)
				let sumNonTeknisPekerjaan        = parseFloat(tertib_nonteknis_pekerjaan) + parseFloat(inisiatif_nonteknis_pekerjaan) + parseFloat(kerjasama_nonteknis_pekerjaan)
				let sumKepribadian               = parseFloat(perilaku_kepribadian) + parseFloat(kedisiplinan_kepribadian) + parseFloat(tanggung_kepribadian) + parseFloat(ketaatan_kepribadian)
				let sumKeterampilan              = parseFloat(inggris_keterampilan) + parseFloat(excel_keterampilan) + parseFloat(msword_keterampilan) + parseFloat(indeks_keterampilan) + parseFloat(dokumen_keterampilan) + parseFloat(pemahaman_keterampilan)

				if (LIBS._modalValidation(a.val(), a.attr("title"), 'input[name="efektivitas_teknis_pekerjaan"]') == false || LIBS._modalValidation(b.val(), b.attr("title"), 'input[name="ketepatan_teknis_pekerjaan"]') == false || LIBS._modalValidation(c.val(), c.attr("title"), 'input[name="kemampuan_teknis_pekerjaan"]') == false){
					stop.stopPropagation()
				} else if (LIBS._modalValidation(d.val(), d.attr("title"), 'input[name="tertib_nonteknis_pekerjaan"]') == false || LIBS._modalValidation(e.val(), e.attr("title"), 'input[name="inisiatif_nonteknis_pekerjaan"]') == false || LIBS._modalValidation(f.val(), f.attr("title"), 'input[name="kerjasama_nonteknis_pekerjaan"]') == false){
					stop.stopPropagation()
				} else if (LIBS._modalValidation(g.val(), g.attr("title"), 'input[name="perilaku_kepribadian"]') == false || LIBS._modalValidation(h.val(), h.attr("title"), 'input[name="kedisiplinan_kepribadian"]') == false || LIBS._modalValidation(i.val(), i.attr("title"), 'input[name="tanggung_kepribadian"]') == false || LIBS._modalValidation(j.val(), j.attr("title"), 'input[name="ketaatan_kepribadian"]') == false){
					stop.stopPropagation()
				} else if (LIBS._modalValidation(k.val(), k.attr("title"), 'input[name="inggris_keterampilan"]') == false || LIBS._modalValidation(l.val(), l.attr("title"), 'input[name="excel_keterampilan"]') == false || LIBS._modalValidation(m.val(), m.attr("title"), 'input[name="msword_keterampilan"]') == false || LIBS._modalValidation(n.val(), n.attr("title"), 'input[name="indeks_keterampilan"]') == false || LIBS._modalValidation(o.val(), o.attr("title"), 'input[name="dokumen_keterampilan"]') == false || LIBS._modalValidation(p.val(), p.attr("title"), 'input[name="pemahaman_keterampilan"]') == false){
					stop.stopPropagation()
				} else {
		            let args = {
						user_id	             							 	 : $('input[name="user_id"]').val(),
						kpi_teknis_pekerjaan     						     : sumTeknisPekerjaan,
						kpi_nonteknis_pekerjaan  						     : sumNonTeknisPekerjaan,
						kpi_kepribadian          						     : sumKepribadian,
						kpi_keterampilan         						     : sumKeterampilan,
						weight_alternative_aspek_teknis_pekerjaan_unique     : 1,
						weight_alternative_aspek_nonteknis_pekerjaan_unique  : 2,
						weight_alternative_aspek_kepribadian_unique          : 3,
						weight_alternative_aspek_keterampilan_unique         : 4
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
				}
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