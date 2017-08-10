<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_user extends CI_Controller {

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
	public function view_manage_user() {
		$this->router->class;
		$this->load->view("management_user",$this->PAGE);
	}
	
	/* start sub management user */
	public function view_add_user() {
		$type = $this->session->userdata('type');
    	if($type == "superadmin"){
			$this->load->view("add_user",$this->PAGE);
		} else {
			$message = "You not superadmin !!";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}
	public function view_user() {
		$type = $this->session->userdata('type');
    	if($type == "superadmin"){
			$this->load->view("view_user",$this->PAGE); //edit user (superadmin)
		} else {
			$message = "You not superadmin !!";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}
	
}

?>