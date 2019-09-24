<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function front()
	{
		$this->load->model('Articlesmodel','articles');
		$articles = $this->articles->articles_list();
		$this->load->view('project/header',['articles'=>$articles]);
		$this->load->view('project/front',['articles'=>$articles]);
		$this->load->view('project/footer',['articles'=>$articles]);
	}public function dashboard()
	{
		$this->load->model('Articlesmodel','articles');
		$articles = $this->articles->articles_list();
		$this->load->view('project/header',['articles'=>$articles]);
		$this->load->view('project/dashboard',['articles'=>$articles]);
		$this->load->view('project/footer',['articles'=>$articles]);
	}
	public function store_article()
	{

		$data['ms']="";
		extract($_POST);
		if(isset($sub))
		{
			$config['upload_path']= './upload/';
			$config['allowed_types']= 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('img'))
			{
			  $data['ms']="Not uploaded image";
			}
			else
			{
				$im=$_FILES['img']['name'];
				$this->load->library('form_validation');
				if ($this->form_validation->run('add_article_rules'))
				{
					$this->load->model('Articlesmodel','articles');
					if($this->articles->add_article($title,$im,$body))
					{
						$this->dashboard();
					}
					else
					{
						echo 'Insert Failed';
					}
				}
				
				else
				{
					echo 'Insert Failed';
				}
			}
		}

		else
		{
			$this->load->view('project/header');
			$this->load->view('project/add_article');
			$this->load->view('project/footer');
		}
	}
	public function add_article()
			{
		$this->load->view('project/header');
		$this->load->view('project/add_article');
		$this->load->view('project/footer');
		}
	public function edit_article($article_id)
	{
		$this->load->model('Articlesmodel','articles');
		if($arts['arts']=$this->articles->edit_list($article_id))
		{
			$this->load->view('project/header');
			$this->load->view('project/edit_article',$arts);
			$this->load->view('project/footer');
		}
	}
	function update_article($art_id)
	{   
		$this->load->model('Articlesmodel','articles');
		$data=array('title'=>$_POST['title'],'body'=>$_POST['body']);
		if($this->articles->update_list($art_id,$data))
		{
			$this->session->set_flashdata('feedback_success',"Article Updated Successfully");
			redirect('admin/dashboard');
		}
	
	}

	public function delete_article($article_id)
	{
		if($article_id!="")
		{

			$this->load->model('Articlesmodel','articles');
			if($this->articles->delete_list($article_id))
			{
				$this->dashboard();
			}
		}
	}
}