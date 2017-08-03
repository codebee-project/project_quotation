<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $PAGE;
	public function __construct() {
		parent::__construct();
		$this->load->model("Model_member");
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library("upload");
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
	}
	/* start member */
	public function index() {
		$this->load->view("member/login",$this->PAGE);
	}
	public function view_register() {
		$this->load->view("member/register",$this->PAGE);
	}
	public function view_forgot() {
		$this->load->view("member/forgot",$this->PAGE);
	}
	public function view_edit_profile() {
		$this->load->view("view_edit_profile",$this->PAGE);
	}
	/* end member */

	/* start main menu */
	public function view_dash() {
		$this->load->view("dashboard",$this->PAGE);
	}
	public function view_quotation_list() {
		$this->load->view("quotation_list",$this->PAGE);
	}
	public function view_document_list() {
		$this->load->view("document_list",$this->PAGE);
	}
	public function view_invoice_list() {
		$this->load->view("invoice_list",$this->PAGE);
	}
	public function view_company_list() {
		$this->load->view("company_list",$this->PAGE);
	}
	public function view_contact_list() {
		$this->load->view("view_contact_list",$this->PAGE);
	}
	public function view_manage_user() {
		$this->load->view("management_user",$this->PAGE);
	}
	public function view_quotation_type() {
		$this->load->view("quotation_type",$this->PAGE);
	}
	/* end main menu */

	/* start sub menu */

	/* start sub quotation */
	public function view_add_quotation() {
		$this->load->view("add_quotation",$this->PAGE);
	}
	public function view_quotation() {
		$this->load->view("view_quotation",$this->PAGE);
	}
	public function view_edit_quotation() {
		$this->load->view("edit_quotation",$this->PAGE);
	}
	public function view_add_doc_quotation() {
		$this->load->view("add_doc_quotation",$this->PAGE);
	}
	public function view_add_inv_quotation() {
		$this->load->view("add_invoice_quotation",$this->PAGE);
	}
	public function view_con_quotation() {
		$this->load->view("add_contact_quotation",$this->PAGE);
	}
	/* end sub quotation */

	/* start sub document */
	public function view_add_document() {
		$this->load->view("add_document",$this->PAGE);
	}
	public function view_edit_document() {
		$this->load->view("edit_document",$this->PAGE);
	}
	/* end sub document */

	/* start sub invoice */
	public function view_add_invoice() {
		$this->load->view("add_invoice",$this->PAGE);
	}
	public function view_edit_invoice() {
		$this->load->view("edit_invoice",$this->PAGE);
	}
	/* end sub invoice */

	/* start sub company */
	public function view_add_company() {
		$this->load->view("add_company",$this->PAGE);
	}
	public function view_edit_company() {
		$this->load->view("edit_company",$this->PAGE);
	}
	/* end sub company */

	/* start sub contact */
	public function view_add_contact() {
		$this->load->view("add_contact",$this->PAGE);
	}
	public function view_edit_contact() {
		$this->load->view("edit_contact",$this->PAGE);
	}
	/* end sub contact */

	/* start sub management user */
	public function view_add_user() {
		$this->load->view("add_user",$this->PAGE);
	}
	public function view_user() {
		$this->load->view("view_user",$this->PAGE); //edit user (superadmin)
	}
	/* end sub management user */

	/* start sub management user */
	public function view_add_type() {
		$this->load->view("add_quotation_type",$this->PAGE);
	}
	public function view_edit_type() {
		$this->load->view("edit_quotation_type",$this->PAGE);
	}
	/* end sub management user */

}

?>