<?php 

/**
* 
*/
class Profile extends CI_Controller
{
	public function index(){
		$data = array('title' =>'Perfil');

		$this->load->view("guest/head",$data);

		$data = array('nav'=>"Blog");

		$this->load->view("guest/nav",$data);

		$data = array('post'=>"Bienvenido a tu perfil",'descripcion'=>'Apartado para crear Post');

		$this->load->view("guest/header",$data);

		$this->load->view("admin/content");
		
		$this->load->view("guest/footer");
	}
	
}





 ?>