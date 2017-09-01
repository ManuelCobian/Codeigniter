<?php
/**
* 
*/
class User extends CI_Model
{
	public function getUser($id = ""){

		$result=$this->db->query("SELECT * FROM user WHERE email = '" .$id. "' LIMIT 1");
		
		if ($result->num_rows()>0) {
			return $result->row();
			# code...
		}
		else{
			return null;
		}
	}
}



 ?>