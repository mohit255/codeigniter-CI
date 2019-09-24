<?php
class Articlespage extends CI_Controller
{
function index()
{
	$this->load->view('header');
	$this->load->view('content');
	$this->load->view('footer');
	
}


}