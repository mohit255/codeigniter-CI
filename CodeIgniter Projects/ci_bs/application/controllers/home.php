<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('sidebar');
		   if($data['posts']=$this->user_model->get_post())
		//get_post is method, call get_post method for fetching data
        {
            $this->load->view('container',$data);
        }
        else{
            $this->load->view('container',$data);
        }
 	}
	
	
 public function login()
	 {
	 $this->load->view('header');
	 $this->load->view('sidebar');
	 $this->load->view('login');
 
 	}
 
 
  public function signup()
		{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('signup');
		}
 
 
   public function profile()
		{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('profile');
		}
 
    public function writepost()
		{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('writepost');
		}
 
 
     public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
	
	
	
	
}
