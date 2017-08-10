<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation_type extends CI_Controller {

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
	public function view_type_list() {
		$this->router->class;
		$this->load->view("type_list",$this->PAGE);
	}
	
	/* start sub type */
	public function view_add_type() {
		$type = $this->session->userdata('type');
    	if($type == "superadmin"){
			$this->load->view("add_quotation_type",$this->PAGE);
		} else {
			$message = "You not superadmin !!";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}
	public function view_edit_type() {
		$type = $this->session->userdata('type');
    	if($type == "superadmin"){
			$this->load->view("edit_quotation_type",$this->PAGE);
		} else {
			$message = "You not superadmin !!";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}

	
}

?>