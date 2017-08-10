<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

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
	public function view_document_list() {
		$this->router->class;
		$this->PAGE['alert'] = $this->session->flashdata('msg');
		$this->load->view("document_list",$this->PAGE);
	}
	
	/* start sub document */
	public function view_add_document() {
		$this->load->view("add_document",$this->PAGE);
	}
	
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
		
		$this->db->insert('cd_document', $data);
		$message = "Add Document succsess.";
		$this->session->set_flashdata('msg',$message);
		redirect('Document/view_document_list');
	
	}
	public function view_edit_document() {
		$this->load->view("edit_document",$this->PAGE);
	}
	
	
}

?>