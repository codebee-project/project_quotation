<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

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

	/* start main menu */
	public function view_invoice_list() {
		$this->router->class;
		$this->load->view("invoice_list",$this->PAGE);
	}
	
	/* start sub invoice */
	public function view_add_invoice() {
		$this->load->view("add_invoice",$this->PAGE);
	}
	
	public function add_invoice() {
		
	}	
	
	public function view_edit_invoice() {
		$this->load->view("edit_invoice",$this->PAGE);
	}


}

?>