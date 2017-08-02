/*---- table view-quotation -----*/

var quotation_table;
var company_table;





function table_report() {
  var table = $('#report').DataTable( {
	  responsive: true,
	  bFilter: false,
	  bInfo: false,
	  "bPaginate": false
  });
}
  
function table_quotation_list() {
  quotation_table = $('#quotation_list').DataTable( {
	  responsive: true,
	  bFilter: false,
	  bInfo: false,
	  "bPaginate": false
  });
}
  
function table_invoice_list() {
  var table = $('#invoice_list').DataTable( {
	  responsive: true,
	  bFilter: false,
	  bInfo: false,
	  "bPaginate": false
  });
}
function table_company_list() {
  company_table = $('#company_list').DataTable( {
	  responsive: true,
	  bFilter: false,
	  bInfo: false,
	  "bPaginate": false
  });
}
  
  function table_contact_list() {
  var table = $('#contact_list').DataTable( {
	  responsive: true,
	  bFilter: false,
	  bInfo: false,
	  "bPaginate": false
  });
  }
  
  function table_manage_list() {
  var table = $('#manage_list').DataTable( {
	  responsive: true,
	  bFilter: false,
	  bInfo: false,
	  "bPaginate": false
  });
  }



$(document).ready(function() {
						   
  table_report();
  table_quotation_list();
  table_invoice_list();
  table_company_list();
  table_contact_list();
  table_manage_list();
 
   $(".status_quo").each(function(index){
		$(this).click(function(){
			if($(this).hasClass("off")){
				$(this).removeClass("off");
			}else{
				$(this).addClass("off");
			}
		});
	});
   
});

