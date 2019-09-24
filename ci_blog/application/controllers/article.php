<?php
class Article extends CI_Controller
{

	function addarticle()
	{
		extract($_POST);
		if(isset($submit))
		{
			if($this->articles_model->add_article($article_name,$category,$article_body,$published_on))
			{

				redirect("article/show_articles");
			}
		}
    $this->load->view('header');
	$this->load->view('add_article');
	$this->load->view('footer');
	}

	function show_articles()
{
	if($articles['articles']=$this->articles_model->show_articles())
	{
	$this->load->view('header');
	$this->load->view('show_articles',$articles);
	$this->load->view('footer');
    }
}

function edit_article($article_id)
{
if($arts['arts']=$this->articles_model->edit_article($article_id))
{
$this->load->view('header');
$this->load->view('edit_article',$arts);
$this->load->view('footer');
}
}

 function update_article($art_id)
 {   $data=array('article_name'=>$_POST['uname'],'category'=>$_POST['ucategory'],'article_body'=>$_POST['ubody'],'published_on'=>$_POST['published_on']);

		if($this->articles_model->update_article($art_id,$data))
		{
			$this->session->set_flashdata('feedback_success',"Article Updated Successfully");
			redirect('article/show_articles');
		}
	
 }

 function delete_article($article_id)
 {
 	if($article_id!="")
 	{
 		if($this->articles_model->delete_article($article_id))
 		{
 			redirect('article/show_articles');
      	}
 	}
 }


}