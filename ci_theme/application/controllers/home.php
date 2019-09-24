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
		extract($_POST);
		if(isset($blog_btn))
		{
			$this->Post_model->post_up($pemail,$pt,$post);
		}
		$this->load->model('post_model');
		$data['posts']=$this->post_model->getPosts();
		$this->load->view('header');
		$this->load->view('front_page',$data);
		$this->load->view('footer');
	}
	public function post_edit($id)
	{
		if($epost['epost']=$this->Post_model->edit_post($id))
		{
			$this->load->view('header');
			$this->load->view('edit_post',$epost);
			$this->load->view('footer');
			}
	}
/*	public function update_post($id)
	{
		extract($_POST);
		if(isset($edit_post))
		{
			if($this->Post_model->post_update($id,$ept,$epost))
			{
				redirect('home');
			}
		}
		
	}
*/
    public function update_post($id)
	{
		 $udata=array('post_title'=>$_POST['ept'],'post'=>$_POST['epost']);

		if($this->Post_model->post_update($id,$udata))
		{
			$this->session->set_flashdata('feedback_success',"Post Updated Successfully");
			redirect('home');
		}
	
	} 
	public function post_del($id)
	{
		if($id!="")
		{
			if($this->Post_model->delete_post($id))
			{
				redirect('home');
			}
		}
	}
}
