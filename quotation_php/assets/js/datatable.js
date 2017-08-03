/*---- table quotation -----*/

var quotation_list_table;
var document_list_table;
var invoice_list_table;
var company_list_table;
var contact_list_table;
var manage_list_table;
var type_list_table;
var view_quo_table;
var view_user_table;
var add_doc_quo_table;
var add_invoice_quo_table;
var add_contact_quo_table;


function table_quotation_list() {
  quotation_list_table = $('#quotation_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_doc_list() {
  document_list_table = $('#doc_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}
  
function table_invoice_list() {
  invoice_list_table = $('#invoice_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_company_list() {
  company_list_table = $('#company_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}
  
function table_contact_list() {
  contact_list_table = $('#contact_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}
  
function table_manage_list() {
  manage_list_table = $('#manage_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_type_list() {
  type_list_table = $('#type_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_view_quo() {
  view_quo_table = $('#view_quo_list').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}
  
function table_view_user() {
  view_user_table = $('#view_user').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_add_doc_quo() {
  add_doc_quo_tables = $('#add_doc_quo').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_add_inv_quo() {
  add_invoice_quo_table = $('#add_invoice_quo').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

function table_add_con_quo() {
  add_contact_quo_table = $('#add_contact_quo').DataTable( {
    responsive: true,
    bFilter: false,
    bInfo: false,
    "bPaginate": false
  });
}

$(document).ready(function() {
  
  table_quotation_list();
  table_invoice_list();
  table_company_list();
  table_contact_list();
  table_manage_list();
  table_type_list();
  table_view_quo();
  table_view_user();
  table_add_doc_quo();
  table_add_inv_quo();
  table_add_con_quo();

 
$('input[type=checkbox]').change(function() {
    if ($(this).is(':checked')) {
        alert('checked');
        $(this).removeClass("tr-color-off")
    } else {
        alert('unchecked');
        $(this).addClass("tr-color-off")
    }
});

/*  $("test_sw").each(function(index){
    $(this).click(function(){
      if($(this).hasClass("off")){
        $("#t1").removeClass("off");
      }else{
        $(this).addClass("off");
      }
    });
  });*/

});



