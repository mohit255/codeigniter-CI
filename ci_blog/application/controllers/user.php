<?php
class User extends CI_Controller
{
	function logout()
	{
		session_destroy();
		redirect("articlespage");
	}

	function register()
	{
      extract($_POST);
      if(isset($submit))
      {
      	$password=md5($password);
      	if($this->users_model->register($username,$password,$age,$city,$role))
      	{
      		$this->session->set_userdata('username',$username);
      		$this->session->set_userdata('role',$role);
          $this->session->set_flashdata('feedback_success',"registered successfully");
        	redirect("articlespage");
        }
      }
      
            $this->load->view("header");
            $this->load->view("register");
           $this->load->view("footer");
	}

	function login()
	{
	   extract($_POST);
      if(isset($submit))
      {
      	
      	if($this->users_model->login($username,$password,$role))
      	{
      		$this->session->set_userdata('username',$username);
      		$this->session->set_userdata('role',$role);
          $this->session->set_flashdata('feedback_success',"Logged in Successfully");
        	redirect("articlespage");
        }
      }
		 $this->load->view("header");
           $this->load->view("login");
           $this->load->view("footer");
		
	}
}