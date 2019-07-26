rank = {

	__construct() {

	},
	index: {

		init() {
			this._rankChart('#admPo','#3c8dbc')
		  	this._rankChart('#admReq','#1ae8e5')
		  	this._rankChart('#vpc','#1ae8a0')
		  	this._rankChart('#vpcEdocs','#10e829')
		  	this._rankChart('#docon','#92e810')
		  	this._rankChart('#doconEdocs','#bde810')
		  	this._rankChart('#buyer','#e8cf10')
		  	this._rankChart('#tkdn','#e85410')
		},
		_rankChart(parameter, color) {
			let ticks = [
				[0, "On progress"], [1, "Achieved"], [2, "Billed"], [3, "Paid"]
			]

		    let data = [
		    			{data: [[0,10]], color: "#3498db", id:1}, 
			            {data: [[1,8]] , color: "#18c5a9", id:2},
			            {data: [[2,4]] , color: "#5c6bc0", id:3},
			            {data: [[3,13]], color: "#5c6bc0", id:4}
			]

		    let barOptions = {
				series: {
					bars: {
						show: true,
						barWidth: 0.6,
						fill: true,
						align: 'center',
						fillColor: {
							colors: [{
								opacity: 0.8
							}, {
								opacity: 0.8
							}]
						}
					}
				},
				xaxis: {
					mode: 'categories',
					tickDecimals: 0,
					ticks: ticks
				},
				colors: ["#18C5A9"],
				grid: {
					color: "#999999",
					hoverable: true,
					clickable: true,
					tickColor: '#DADDE0',
					borderWidth: 0
				},
				legend: {
					show: false
				},
				tooltip: true,
				tooltipOpts: {
					content: "%y"
				}
			}

			$.plot(parameter, data,barOptions)
		}

	}

}