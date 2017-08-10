<?php

class Model_member extends CI_Model {

	//get id user for check login
	public function getAllID() {
		$query = $this->db->query("SELECT * FROM cb_member");
		if($query->num_rows() > 0 ) {
			return $query->result();
		}else{
			return  array();
		}
	}
	public function getUserId($id) {
		$query = $this->db->query("SELECT * FROM cb_member WHERE member_id = ".$id);
		if($query->num_rows() > 0 ) {
			return $query->result();
		}else{
			return  array();
		}	
	}
	public function getLogin($email,$pass) {
		$query = $this->db->query("SELECT * FROM cb_member WHERE member_email = '".$email."' AND member_password = '".$pass."';");
		if($query->num_rows() > 0 ) {
			return $query->result();
		}else{
			return  array();
		}	
	}

	//get id for user facebook
	public function getLoginFace($email,$pass) {
		$query = $this->db->query("SELECT * FROM cb_member WHERE member_email = '".$email."' AND member_uid = '".$pass."';");
		if($query->num_rows() > 0 ) {
			return $query->result();
		}else{
			return  array();
		}	
	}

	//get id for send email
	public function getEmailUser($email) {
		$query = $this->db->query("SELECT * FROM cb_member WHERE member_email = '$email'");
		if($query->num_rows() > 0) {
			return $query->result();
		}else{
			return array();
		}
	}

}

?>