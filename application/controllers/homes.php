<?php

/**
* 
*/
class Homes extends CI_Controller
{
	
	public function index(){
		

		$data = array('title' =>'Home');

		$this->load->view("guest/head",$data);

		$data = array('nav'=>"Blog");

		$this->load->view("guest/nav",$data);

		$data = array('post'=>"Blog",'descripcion'=>'Bienvenido a mi blog con codeigneter');

		$this->load->view("guest/header",$data);

		
		
		$result=$this->post->getPost();//nombre de la tabla optiene todo de la tabla
		
		$data=array('consulta'=>$result);

		$this->load->view("guest/content",$data);
		
		$this->load->view("guest/footer");


	}
	public function Contact(){

		$data = array('title' =>'Home');

		$this->load->view("guest/head",$data);

		$data = array('nav'=>"Blog");

		$this->load->view("guest/nav",$data);

		$data = array('post'=>"Contact us",'descripcion'=>'Bienvenido a mi blog con codeigneter');

		$this->load->view("guest/header",$data);

		
		
		$result=$this->post->getPost();//nombre de la tabla optiene todo de la tabla
		
		$data=array('consulta'=>$result);

		$this->load->view("guest/contact",$data);
		
		$this->load->view("guest/footer");

	}
	public function Acerca(){

		$data = array('title' =>'Home');

		$this->load->view("guest/head",$data);

		$data = array('nav'=>"Blog");

		$this->load->view("guest/nav",$data);

		$data = array('post'=>"About Us",'descripcion'=>'Bienvenido a mi blog con codeigneter');

		$this->load->view("guest/header",$data);

		
		
		$result=$this->post->getPost();//nombre de la tabla optiene todo de la tabla
		
		$data=array('consulta'=>$result);

		$this->load->view("guest/acerca",$data);
		
		$this->load->view("guest/footer");

	}
	public function Login(){
		$this->load->view("guest/login");
	}



}




?>