<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->model('fetch_data');
		$data['title']='MVC Title Here';
		$data['page_header']='Fetch Data from database with CI.';
		$data['firstname']=$this->fetch_data->getFirstNames();
		$data['lastname']=$this->fetch_data->getLastName();
		$data['mobile']=$this->fetch_data->getMobile();
		$data['email']=$this->fetch_data->getEmail();
		$data['users']=$this->fetch_data->getUsers();
		$this->load->view('first_page',$data);
	}
}
