position = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#position-table')
			LIBS._modalDelete('#position-table','.delete_record','position-id','#modalDelete','input[name="position_id"]')
			position.save._save()
			position.delete._delete()
		},
		_buttonReset(){
			$('#button-reset').on('click',function(){
	            $('input[name="position_name"]').val('');
	        })
		},

	},
	save: {

		init() {
			this._save()
		},
		_save(){
			$('#button-save').on('click',function(e){
				let position_name = $('input[name="position_name"]')

				if (LIBS._modalValidation(position_name.val(), position_name.attr("title")) == false){
					e.stopPropagation()
				} else {  
		            let args = {
						position_name	  : position_name.val(),
					}
		            LIBS._ajax("position/save", LIBS._jsonToQueryString(args)).done((res) => {
						if (res) {
							let objek = $.parseJSON(res)
			                if (objek.status == 1) {
			                    $('#modalAdd').modal('hide')
			                    toastr['success'](objek.pesan)
			                    setTimeout(() => { window.location.reload() }, 1000)
			                } else {
			                    toastr['error'](objek.pesan)
			                }
						}
					})
				}
	        })
		}
	},
	delete : {
		init() {
			this._delete()
		},
		_delete(){
			$('#button-delete').on('click',function(){
	            let args = {
					position_id	  : $('input[name="position_id"]').val()
				}
	            LIBS._ajax("position/delete", LIBS._jsonToQueryString(args)).done((res) => {
					if (res) {
						let hapus = $.parseJSON(res)
		                if (hapus.status == 1) {
		                    $('#modalDelete').modal('hide')
		                    toastr['success'](hapus.pesan)
		                    setTimeout(() => { window.location.reload() }, 1000)
		                } else {
		                    toastr['error'](hapus.pesan)
		                }
					}
				})
	        })
		}
	},

}