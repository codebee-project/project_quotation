$(document).ready(function(){
	login();
	register();
	add_company();
	add_document();
	add_invoice();
});

function login(){
	$('#form_login').validate({
	 	// initialize the plugin
		errorClass: "validation",
		rules: {
			log_email: "required",
			log_pass: "required"
		},
		messages: {
			log_email: false,
			log_pass: false
		}
	});
}

function register(){
	$('#form_register').validate({
	 	// initialize the plugin
		errorClass: "validation",
		rules: {
			reg_name: "required",
			reg_email: "required",
			reg_pass: "required",
			reg_con_pass: {
				required: true,
				equalTo: "#reg_pass"
			}
		},
		messages: {
			reg_name: false,
			reg_email: false,
			reg_pass: false,
			reg_con_pass: false
		},
	});
}

function add_company(){
	$('#form_add_company').validate({
	 	// initialize the plugin
		errorClass: "validation",
		rules: {
			ip_comName: "required"
		},
		messages: {
			ip_comName: "Please enter company name"
		},
	});
}

function add_document(){
	$('#form_add_document').validate({
	 	// initialize the plugin
		errorClass: "validation",
		rules: {
			ip_docName: {
				required: true
			},
			upload_fileDoc: {
				required: true,
				accept: "application/msword, application/pdf"
			}
		},
		messages: {
			ip_docName: "Please enter document name",
			upload_fileDoc: "Please choose file .pdf/.doc"
		},
	});
}

function add_invoice(){
	$('#form_add_invoice').validate({
	 	// initialize the plugin
		errorClass: "validation",
		rules: {
			ip_invNo: "required"
		},
		messages: {
			ip_invNo: "Please enter invoice number"
		},
	});
}