<?php 

/**
* 
*/
class Post extends CI_Model
{
	
	public function getPost(){//toma todos los datos de una tabla de la db

		return $this->db->get('post');

	}
	

	public function getPostByName($id = '')//
 	{
  
  		$result = $this->db->query("SELECT * FROM post WHERE id = '" .$id. "' LIMIT 1");
  		return $result->row();
	}

	public function insert($post = null){

		if ($post!=null) {
			$nombre=$post['nombre'];
			$descripcion=$post['descripcion'];
			$contenido=$post['contenido'];
			$file_name=$post['file_name'];
			$SQL="INSERT INTO post(Post,Descripcion,Contenido,img,fecha)
			VALUES('$nombre','$descripcion','$contenido','$file_name',curdate())";
			if ($this->db->query($SQL)) {
						# code...
					return true;
			}
			else{
				return false;
			}
		}
	}
}




 ?>