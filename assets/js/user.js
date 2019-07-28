user = {

	__construct() {

	},
	index: {

		init() {
			LIBS._dataTable('#user-table')
			this._toastr()
		},
		_toastr(){
			$('.adjis-toastr').click(function() {
	      	  toastr['warning']('adjis')
	    	});
		}

	}

}