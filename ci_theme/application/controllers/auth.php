<?php
class Auth extends CI_controller
{
	function logout()
	{
	session_destroy();
	redirect("Auth/login");	
	}
     function regis()
     {
		 extract($_POST);
		 if(isset($rg))
		 {
			 //$pwd=md5($pwd);
			 if($this->Auth_model->reg($fn,$ln,$mob,$email,$pwd))
			 {
				 $this->session->set_userdata('em_add',$email);
				 redirect("Home");
			 }
		 }
		 //$this->load->model('auth_model');
		 $this->load->view("header");
		 $this->load->view("regis");
		 $this->load->view("footer");
	 }
	 function login()
     {
		$data['msg']="";
		 extract($_POST);
		 if(isset($logn))
		 {
			 $l=$this->Auth_model->logn($email,$pwd);
			 if($l)
			 {
				 $this->session->set_userdata('em_add',$email);
				 redirect("Home");
				 
			 }
			 else
			 {
				 $data['msg']="Login Failed: Invalid Details !";
				// redirect("Auth/login");
			 }
			 
		 }
		 $this->load->view("header");
		 $this->load->view("login",$data);
		 $this->load->view("footer");
	 }
	 
	 function users()
	 {
		 
		 $this->load->model('auth_model');
		 $data['users']=$this->Auth_model->fetch_users();
		 $this->load->view("header");
		 $this->load->view("users",$data);
		 $this->load->view("footer");
	 }
}
?>	 