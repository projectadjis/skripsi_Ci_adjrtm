LIBS = {

	_dataTableAlternativeOrigin: function (parameter, addButton, editButton, saveEditButton, cancelEditButton, deleteButton) {
		let counter = 0
		    let t = $(parameter).DataTable({
				      'paging'      : false,
				      'lengthChange': false,
				      'searching'   : false,
				      'ordering'    : false,
				      'info'        : false,
				      'autoWidth'   : false
				    })
 			
 			//console.log(t.row().index())
 			// add button
		    $(addButton).on('click', function () {
		    	if (t.rows().count() <= 4) {
			        t.row.add([
			            counter + 1,
			            '<input type="text" id="R_' + counter + '_1" style="width:50px; text-align: center" />',
			            '<input type="text" id="R_' + counter + '_1" style="width:50px; text-align: center" />',
			            '<input type="text" id="R_' + counter + '_1" style="width:50px; text-align: center" />',
			            '<button type="submit" class="btn btn-success btn-sm" id="R_' + counter + '_1"><i class="fa fa-save"></i>&nbsp;Save</button>&nbsp;<button type="submit" class="btn bg-navy btn-sm cancel" id="R_' + counter + '_1"><i class="fa fa-arrows-alt"></i>&nbsp;Cancel</button>'
			        ]).draw(false);
			 
			        counter++
		        } else {
		        	$(addButton).attr("disabled", true)
		        }

		        // cancel button
		        $(parameter).on('click', ".cancel", function(e) {
		          t.row($(this).closest('tr') ).remove().draw()
		          $(addButton).attr("disabled", false)
		        })
		    })
		    // jika edit button di tekan
	        $(parameter).on('click', editButton, function(e) {
		         let row = $(this).closest("tr").off("mousedown")
		         let tds = row.find("td").not(':first').not(':last')
		         

		        $.each(tds, function(i, el) {
		          let txt = $(this).text()
		          $(this).html("").append("<input type='text' style='width:50px; text-align: center' value=\""+txt+"\">")
		        })

		        $(saveEditButton).removeAttr('style')
		        $(cancelEditButton).removeAttr('style')
		        $(editButton).css('display', 'none')
		        $(deleteButton).css('display', 'none')
	        })
	        // jika cancel button di tekan
	        $(parameter).on('click', cancelEditButton, function(e) {
		         let $row = $(this).closest("tr");
	             let $tds = $row.find("td").not(':first').not(':last');
	        
		        $.each($tds, function(i, el) {
		          let $txt = $(this).find("input").val()
		          $(this).html($txt);
		        });

		        $(saveEditButton).css('display', 'none')
		        $(cancelEditButton).css('display', 'none')
		        $(editButton).removeAttr('style')
		        $(deleteButton).removeAttr('style')
	        })
	},
	_dataTableAlternative: function (parameter, addButton) {
		let counter = 0
		    let t = $(parameter).DataTable({
				      'paging'      : false,
				      'lengthChange': false,
				      'searching'   : false,
				      'ordering'    : false,
				      'info'        : false,
				      'autoWidth'   : false
				    })
 			
 			if (t.rows().count() == 5 ) {
			    $(addButton).attr("disabled", true).css("pointer-events", "none")
			}

 			$(addButton).on('click', function (e) {
			    if (t.rows().count() == 5 ) {
			    	 e.stopPropagation()
			    }
		    })
	},
	_dataTableCriteriaOrigin: function (parameter, addButton) {
		let counter = 0
		    let t = $(parameter).DataTable({
				      'paging'      : true,
				      'lengthChange': true,
				      'searching'   : true,
				      'ordering'    : true,
				      'info'        : true,
				      'autoWidth'   : true
				    })
 			
 			// add button
		    $(addButton).on('click', function () {
			        t.row.add([
			            counter + 1,
			            '<input type="text" id="R_' + counter + '_1" style="width:20px; text-align: center" />',
			            '<input type="text" id="R_' + counter + '_1" style="width:20px; text-align: center" />',
			            '<input type="text" id="R_' + counter + '_1" style="width:20px; text-align: center" />',
			            '<input type="text" id="R_' + counter + '_1" style="width:20px; text-align: center" />',
			            '<button type="submit" class="btn btn-success btn-xs" title="save" id="R_' + counter + '_1"><i class="fa fa-save"></i></button>&nbsp;<button type="submit" class="btn bg-navy btn-xs cancel" title="cancel" id="R_' + counter + '_1"><i class="fa fa-arrows-alt"></i></button>'
			        ]).draw(false);
			 
			        counter++
		        // cancel button
		        $(parameter).on('click', ".cancel", function(e) {
		          t.row($(this).closest('tr') ).remove().draw()
		        })
		    })
	},
	_dataTableCriteria: function (parameter) {
		let a = $(parameter).DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : true,
		      'info'        : true,
		      'autoWidth'   : true
		})
		// var d = a.column(5).data().toArray()
		// if (a.column(5).data().toArray()) {
		// 	toastr['warning']('ea')
		// }
		//console.log(d[0][key].Value)
        //console.log(d)
	},
	_dataTable: function (parameter) {
		$(parameter).DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : true,
		      'info'        : true,
		      'autoWidth'   : true
		})
	},
	_ajax: function (toUrl, toData) {
		//var finalUrl = (!/^(f|ht)tps?:\/\//i.test(toUrl) ? (options.siteUrl + toUrl) : toUrl)
		var getUrl   = window.location
		var baseUrl  = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]
		var finalUrl = baseUrl+"/"+toUrl
		return $.ajax({
			type: 'post',
			url: finalUrl,
			data: toData,
		})
	},
	_jsonToQueryString: function (obj) {
		var str = [];
		for (var p in obj) {
			if (obj.hasOwnProperty(p)) {
				str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			}
		}

		return str.join("&");
	},
	_dataTableServerSide: function (parameter, toUrl) {
		let getUrl   = window.location;
		let baseUrl  = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
		let finalUrl = baseUrl+"/"+toUrl

	        $(parameter).DataTable({ 

	            "processing": true, 
	            "serverSide": true, 
	            "order": [], 
	            
	            "ajax": {
	                "url": finalUrl,
	                "type": "POST"
	            },

	            
	            "columnDefs": [
		            { 
		                "targets": [ 0 ], 
		                "orderable": false, 
		            },
	            ],

	        })
	},
	_modalDelete:  function (parameter, parameterClass, parameterData, modalHapusID, inputFormTarget) {
		$(parameter).on('click',parameterClass,function(){
            let data =$(this).data(parameterData)
            $(modalHapusID).modal('show')
            $(inputFormTarget).val(data)
        })
	},
	_select2:  function () {
		$(".select2").select2({
		    width: '100%'
		})
	},
	_datepicker:  function () {
		let date = new Date();
		let today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
		let formatDate = today.toString().split("/").join("-")
	
		$('#datepicker').datepicker({
	       todayHighlight: true,
	       format: "dd-mm-yyyy",
		   //startDate: today,
           autoclose: true
	    })

	    $('.datepicker').datepicker('setDate', formatDate);
	}

}
