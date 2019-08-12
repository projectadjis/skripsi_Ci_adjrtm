report = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#report-table')
			LIBS._select2Report()

			//$('.value_report').hide()

			//this._onchangeBasePosition()
			//this._getBasePositionData()
		},
		_onchangeBasePosition(){
			$('select[name="report_position"]').on('change', function () {
				let el = $(this).val()
				//console.log(el)
				report.index._getBasePositionData(el)
			})
		},
		_getBasePositionData(el){
			let args = {
					position_name	  : el
				}
            LIBS._ajax("report/get_data_report", LIBS._jsonToQueryString(args)).done((res) => {
			})
		}


	}

}