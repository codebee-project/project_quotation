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
		$this->PAGE['alert'] = $this->session->flashdata('msg');
		$this->load->view("member/login",$this->PAGE);
	}
	public function view_register() {
		$this->PAGE['alert'] = $this->session->flashdata('msg');
		$this->load->view("member/register",$this->PAGE);
	}
	public function view_forgot() {
		$this->PAGE['alert'] = $this->session->flashdata('msg');
		$this->load->view("member/forgot",$this->PAGE);
	}
	public function view_edit_profile() {
		$this->PAGE['alert'] = $this->session->flashdata('msg');
		$this->load->view("view_edit_profile",$this->PAGE);
	}
	/* end member */

	/* start main menu */
	public function view_dash() {
		$this->PAGE['alert'] = $this->session->flashdata('msg');	
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
		$this->load->view("contact_list",$this->PAGE);
	}
	public function view_manage_user() {
		$type = $this->session->userdata('type');
    	if($type == "superadmin"){
			$this->load->view("management_user",$this->PAGE);
		} else {
			$message = "You not superadmin !!";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}
	public function view_type_list() {
		$type = $this->session->userdata('type');
    	if($type == "superadmin"){
			$this->load->view("type_list",$this->PAGE);
		} else {
			$message = "You not superadmin !!";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
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
	public function add_document(){
		$this->input->post('upload_fileDoc');
		
		$check_image_path = (isset($_FILES['upload_fileDoc']))?$_FILES['upload_fileDoc']:"";
		$check_name = ($check_image_path)?$check_image_path['name']:"";
		
		$filePath = './uploads/';
		$config['upload_path'] = $filePath;
		$config['allowed_types'] = 'pdf|doc';
		$config['overwrite'] = true;
		$config['encrypt_name'] = TRUE;
		
		$this->upload->initialize($config);

		if($check_name && ($check_name[0]) != null){
			
			if(! $this->upload->do_upload('upload_fileDoc')) {
				$error = $this->upload->display_errors(); 
				echo 'unsuccess';
				exit();
			} else { 
				$file_info = $this->upload->data();
				$file_doc = ('uploads/'.$file_info['file_name']);
			}
		}
		
		$data = array(
			'doc_name' => $this->input->post('ip_docName'),
			'doc_file' => $file_doc
		);
		
		$this->db->insert('cb_document', $data);
		echo 'success';
		
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
	public function add_company(){
		$data = array(
			'comp_identity' => $this->input->post('ip_ident'),
			'comp_name' => $this->input->post('ip_comName'),
			'comp_address' => $this->input->post('ip_comAddress'),
			'comp_status' => 'active'
		);
		
		$this->db->insert('cb_company', $data);
		echo 'success';
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
	/* end sub management user */

	/* start sub management user */
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

	public function logout() {
		$this->session->unset_userdata('type');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('image');
		redirect('home');
	}
	/* end sub management user */

}

?>