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

			$this->load->library('form_validation');
			$this->form_validation->set_rules('un', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_rules('age', 'Age', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			
			if($this->form_validation->run())
			{				
		
				$pass=md5($pass);
				if($this->User_model->in($un,$pass,$age,$city,$role))
				{
					$this->session->set_userdata('un',$un);
					$this->session->set_userdata('rol',$role);
					redirect("Posts");
				}
			}
			else
			{					
				$this->load->view("project/header");
				$this->load->view("project/regis");
				$this->load->view("project/footer");	
			}
		}
		else
		{
				
			$this->load->view("project/header");
			$this->load->view("project/regis");
			$this->load->view("project/footer");	
		}
						
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
				redirect('admin/dashboard');
			}
			else
			{
				$data['error']="Plz enter correct login details";
			}

		}
		$this->load->view("project/header");
		$this->load->view("project/login",$data);
		$this->load->view("project/footer");
	}
}
?>