<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Member extends CI_Controller {

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
		$this->load->library('email');
		$this->load->library('encryption');
	}

	public function index() {
		$getID = $this->Model_member->getAllID();

		$this->PAGE['login'] = $getID;	
		$this->load->view("member/login",$this->PAGE);
	}

	/* start login */
	public function check_login() {
		$input_email = $this->input->post('log_email');
		$input_pass = $this->input->post('log_pass');
		$getID = $this->Model_member->getLogin($input_email,$input_pass);
		$this->PAGE['getUser'] = $getID;
		if (count($getID) >= 1) {
			$_id	= $getID[0]->member_id;
	  		$email	= $getID[0]->member_email;
	  		$pass	= $getID[0]->member_password;
	  		$name 	= $getID[0]->member_name;
	  		$type	= $getID[0]->member_type;
	  		$image  = $getID[0]->member_image;
	  		$status = $getID[0]->member_status;
	  		if($status == "active") {
		  		if($type == "superadmin") {
					$this->session->set_userdata('type',$type);
					$this->session->set_userdata('name',$name);
					$this->session->set_userdata('image',base_url($image));
					redirect('Dashboard/view_dash');
		  		} else {
					$this->session->set_userdata('type',$type);
					$this->session->set_userdata('name',$name);
					$this->session->set_userdata('image',base_url($image));
					redirect('Dashboard/view_dash');
		  		}
	  		} else {
		  		$message = "Fail to login : Your ID is suspended."."</br>"."Please contact customer service.";
				$this->session->set_flashdata('msg',$message);
				redirect('home');
	  		}
		} else {
			$message = "Fail to login."."</br>"."Please check your email or password.";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}
	/*end login*/

	/*start register*/
	public function add_user() {
		$input_name = $this->input->post("reg_name");
		$input_email = $this->input->post("reg_email");
		$input_pass = $this->input->post("reg_pass");
		$input_con_pass = $this->input->post("reg_con_pass");
		$this->input->post("photo");
		$photo = $this->do_upload();
		//call upload method for check $image is not null
		//$image = $this->do_upload();
		//echo $this->upload->display_errors();
		if($input_pass == $input_con_pass && $input_pass != null) {
			$data = array(
				'member_email'		=> $input_email,
				'member_password'	=> $input_pass,
				'member_name'		=> $input_name,
				'member_type'		=> "member",
				'member_image'		=> $photo,
				'member_status'		=> "active"
			);
			//$this->db->insert('cb_member', $data);

			$message = "Success to register.";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		} else {
			$message = "Fail to register.";
			$this->session->set_flashdata('msg',$message);
			redirect('home/view_register');
		}
	}

	public function do_upload() {
		$check_image_path = (isset($_FILES['photo']))?$_FILES['photo']:"";
		$check_name = ($check_image_path)?$check_image_path['name']:"";
		//$fileName = $this->input->post('title') . '_hero';

		$filePath = './uploads/';
		$config['upload_path'] = $filePath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = true;
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);

		if($check_name && ($check_name[0]) != null){
			if(! $this->upload->do_upload('photo')) {
		        $error = $this->upload->display_errors(); 
				echo "Unsuccess.. please selected image file";
				$this->load->view("manage_menu/insert_form",$this->PAGE);
				exit();
		    } else { 
		        $file_info = $this->upload->data();
		        $photo = 'uploads/'.$file_info['file_name'];

		        return $photo;
		    }
		}
	}
	/*end register*/

	/*facebook*/
	public function log_Facebook() {
		$input_email = $this->input->post('input_email');
		$input_pass = $this->input->post('input_password');
		$input_name = $this->input->post('input_name');
		$getFace = $this->Model_member->getLoginFace($input_email,$input_pass);

		if (count($getFace) >= 1) {
			$email	= $getFace[0]->member_email;
			$pass	= $getFace[0]->member_uid;
			$name 	= $getFace[0]->member_name;
			$image 	= $getFace[0]->member_image;
			$type 	= $getFace[0]->member_type;
		}

		if($input_email != "" && $input_pass != "" && $input_email != $email) {
			$data = array(
				'member_uid'		=> $input_pass,
				'member_email'		=> $input_email,
				'member_password'	=> "",
				'member_name'		=> $input_name,
				'member_type'		=> "member",
				'member_status'		=> "active"
			);
			$this->db->insert('cb_member', $data);

			$getFace = $this->Model_member->getLoginFace($input_email,$input_pass);
			if (count($getFace) >= 1) {
				$type 	= $getFace[0]->member_type;
			}

			if($type == "superadmin") {
				$this->session->set_userdata('type',$type);
				$this->session->set_userdata('name',$name);
					$this->session->set_userdata('image',$image);
				redirect('Dashboard/view_dash');
	  		} else {
				$this->session->set_userdata('type',$type);
				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('image',$image);
				redirect('Dashboard/view_dash');
	  		}
		} else if ($input_email == $email) {
			if($type == "superadmin") {
				$this->session->set_userdata('type',$type);
				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('image',$image);
				redirect('Dashboard/view_dash');
	  		} else {
				$this->session->set_userdata('type',$type);
				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('image',$image);
				redirect('Dashboard/view_dash');
	  		}
		}else {
			$message = "Fail to login."."</br>"."Please check your email or password.";
			$this->session->set_flashdata('msg',$message);
			redirect('home');
		}
	}
	/*end facebook*/
	/*start encryption*/

	public function encrypt_t($text) {
		$this->encryption;
		$key = $this->encryption->create_key(2);
		$config['encryption_key'] = 'WHoRU';

		$this->encryption->initialize(
		array(
		    'cipher' => 'cast-128',
		    'mode' => 'cbc',
		    'key' => $key
		)
		);
		$plain_text = $text;
		$ciphertext = $this->encryption->encrypt($plain_text);

		if($ciphertext != "" && $ciphertext != null) {
			return $ciphertext;
		}
	}

	/*end encryption*/

	/*start forgot*/
	public function send_email() {
/*		$input_email = $this->input->post('for_email');
		$getEmail = $this->Model_member->getEmailUser($input_email);
		for($i = 0; $i < count($getEmail);$i++) {
			$_id	= $getEmail[$i]->member_id;
	  		$email	= $getEmail[$i]->member_email;
	  		$pass	= $getEmail[$i]->member_password;
	  		$name	= $getEmail[$i]->member_name;
	  	}
		$this->email->from('sarawut.eka.it57@cpc.ac.th', 'admin_ss');
		$this->email->to($email);

		$this->email->subject('codebee quotation');
		$this->email->message('สวัสดีคุณ '.$name.'</br></br>'.'มีผู้ส่งคำขอรหัสผ่านบัญชี codebee ของคุณ'.'</br>'.'รหัสผ่าน : '.$pass.'</br></br>'.'หากคุณไม่ใช่ผู้ส่งคำขอรหัสผ่าน ขอให้ไม่สนใจและลบข้อความนี้ได้ทันที'.'</br></br>'.'เพื่อรักษาบัญชีของคุณให้ปลอดภัย โปรดอย่าส่งต่ออีเมลนี้ถึงผู้อื่น');

		$this->email->send();*/
		$message = "ขออภัย.. ระบบกำลังปรับปรุง";
		$this->session->set_flashdata('msg',$message);
		redirect('home');
	}
	/*end forgot*/
}

?>