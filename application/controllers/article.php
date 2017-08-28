<?php 

/**
* 
*/
class Article extends CI_Controller
{
	
		public function post($id = ''){
  
  		
   		$fila = $this->post->getPostByName($id);
   		
   		$data = array('title' =>$fila->Post);

		$this->load->view("guest/head",$data);

		$data = array('nav'=>"Blog");

		$this->load->view("guest/nav",$data);

		$data = array(
			'post'=>$fila->Post,
			'descripcion'=>$fila->Descripcion
			);

		$this->load->view("guest/header",$data);

		$data=array('Contenido' =>$fila->Contenido );

		$this->load->view("guest/post",$data);
		
		$this->load->view("guest/footer");
   		


   	}
}




 ?>