LIBS = {

	_dataTableAlternative: function (parameter, addButton, editButton, saveEditButton, cancelEditButton, deleteButton) {
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
	_dataTableCriteria: function (parameter, addButton) {
		let counter = 0
		    let t = $(parameter).DataTable({
				      'paging'      : true,
				      'lengthChange': true,
				      'searching'   : true,
				      'ordering'    : true,
				      'info'        : true,
				      'autoWidth'   : true
				    })
 			
 			//console.log(t.row().index())
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
	_dataTable: function (parameter) {
		$(parameter).DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : true,
		      'info'        : true,
		      'autoWidth'   : true
		})
	}
	

}
