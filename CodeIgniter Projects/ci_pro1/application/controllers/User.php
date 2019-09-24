<?php
class User extends CI_Controller
{
	function logout()
	{
	session_destroy();
	redirect("Posts");	
	}	
   function regis()
     {
		 extract($_POST);
		 if(isset($sub))
		 {
			$pass=md5($pass);
if($this->User_model->in($un,$pass,$age,$city,$role))
			{
		$this->session->set_userdata('un',$un);
		$this->session->set_userdata('rol',$role);
				redirect("Posts");				
			}
		 }
		$this->load->view("header"); 
		$this->load->view("regis");
		$this->load->view("footer");				
	 }
	 
	 
	 
	 function login()
	{
		$data['error']="";
		extract($_POST);
		if(isset($sub))
		{
		$s=$this->User_model->lo($un,$pass,$role);
		if($s)
		{
			$this->session->set_userdata('un',$un);
		$this->session->set_userdata('rol',$role);
			redirect("Posts/display");	
		}
		else
		{
	$data['error']="Plz enter correct login details";
		}
		}
	    $this->load->view("header"); 
		$this->load->view("login",$data);
		$this->load->view("footer");	
	}
}
?>