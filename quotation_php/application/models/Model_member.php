<?php
class Model_savedee extends CI_Model {

	//get id user for check login
	public function getUserID() {
			$query = $this->db->query("SELECT * FROM cb_member");
			if($query->num_rows() > 0 ){
				return $query->result();
			}else{
				return  array();
			}		
	}

}