<?php
class Posts extends CI_Controller
{
	function index()
	{
		$this->load->view("project/header");
		$this->load->view("project/front");
		$this->load->view("project/footer");
	}
	
}
	
?>