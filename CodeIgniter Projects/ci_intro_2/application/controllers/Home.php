<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->html_helper();
	}
	public function html_helper()
	{
		$this->load->helper('html');
		$data['title']="Mvc Title";
		$data['page_header']="introducation to Html helper";
		$this->load->view('view_html_helper',$data);
	}
}
?>