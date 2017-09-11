<?php 

/**CONTROLADOR PARA LOS POST CUANDO USUARIO ESTA LOGEADO
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

   	public function nuevo(){

   			$data = array('title' =>'Perfil');

		$this->load->view("guest/head",$data);

		$data = array('nav'=>"Blog");

		$this->load->view("guest/nav",$data);

		$data = array('post'=>"Nuevo Post",'descripcion'=>'Creando un nuevo Post');

		$this->load->view("guest/header",$data);

		$this->load->view("admin/nuevo");
		
		$this->load->view("guest/footer");
   	}

   	public function insert(){

   		$post=$this->input->post();
   		$this->load->model('file');
   		$file_name=$this->file->UploadImage('./public/img','No es posible subir la imagen ');
   		$post['file_name']=$file_name;
   		$bool=$this->post->insert($post);

   		if ($bool) {
   			# code...

   			header("Location:".base_url()."article/nuevo");
   		}
   		else{
   			header("Location:".base_url()."profile/");
   		}


   	}




}




 ?>