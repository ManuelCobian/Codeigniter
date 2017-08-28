<?php 

/**
* 
*/
class Post extends CI_Model
{
	
	public function getPost(){//toma todos los datos de una tabla de la db

		return $this->db->get('post');

	}
	

	public function getPostByName($id = '')
 	{
  
  		$result = $this->db->query("SELECT * FROM post WHERE id = '" .$id. "' LIMIT 1");
  		return $result->row();
	}
}




 ?>