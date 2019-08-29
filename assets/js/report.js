report = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#report-table')
			LIBS._select2Report()

			$('.value_report').hide()

			this._clickSetShowData()
		},
		_clickSetShowData(){
			$('#button-report').on('click',function(e){
				let positionName = $('select[name="report_position"]')
				if (LIBS._modalValidation(positionName.val(), positionName.attr("title")) == false){
					e.stopPropagation()
				} else { 
					let args = {
							position_name	  : positionName.val()
						}
		            LIBS._ajax("report/get_data_report", LIBS._jsonToQueryString(args)).done((res) => {
		       //      	console.log(encodeURIComponent(res))
					    // $('.value_report').show()
					    // $(".value_report").html(res);
					})
	        	}
	        })
		}
	}

}