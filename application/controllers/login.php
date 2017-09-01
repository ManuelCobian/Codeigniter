<?php 


/**
* 
*/
	class Login extends CI_Controller
	{
			
			public function index(){
				
				$this->load->model("user");
				$email = $this->input->post("email");
						
				$password= $this->input->post("password");
				
				$fila =$this->user->getUser($email);

				if ($fila != null) {
					if ($fila->password == $password) {
						# code...


						
						//echo $email."".$password;
						
						$data = array(
							'email' =>$email , 
							'id'  => $fila->id,
							'login'=>true
							);

						$this->session->set_userdata($data);
						header("Location:".base_url());
						
					}
					

				}

				if ($fila == null) {
					echo "<h1>"."usuario no encontrado"."</h1>";
					
				}
				
					

			}

			public function log_out(){
			$this->session->sess_destroy();//para destruir sesion
			header("Location:".base_url());
			}
			


		
}






 ?>