<?php
class News extends CI_Controller
{
	
	function index()
	{
		$data['fe']=$this->News_model->fe();
		$dat['ln']=$this->News_model->la();
	$this->load->view("layout/header");
	$this->load->view("layout/sidebar",$dat);
	$this->load->view("layout/content",$data);		
	$this->load->view("layout/footer");	
	}
	function delnews($i)
	 {
		 if($i!="")
		 {
		$x=$this->db->query("select img from news where id=$i");
		$x1=$x->result_array();
		$im=$x1[0]['img'];
		if($this->News_model->de($i))
		 {
			 unlink("../upload/$im");
			redirect("News"); 
		 }
		 }
	 }
	 function editnews($i)
	 {
		
		$data['nd']=$this->News_model->getedit_details($i);
		$sub=$this->input->post('subb');
		if(isset($sub))
		{
			$this->load->library('upload');
			$file=$_FILES['att']['name'];
			if(!empty($file))
			{
				$ext=pathinfo($file,PATHINFO_EXTENSION);
				$fn=rand().".$ext";
				$config['upload_path']          = './upload/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']=$fn;
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('att'))
				{
					echo "upload error";
				}
				else
				{
					extract($_POST);
					if($this->News_model->edit_news($i,$title,$des,$fn))
					{
					echo "<script>alert('Edit Successfully')</script>";
					}
				}
			}
			else
			{
				extract($_POST);
				if($this->News_model->edit_news($i,$title,$des,$fn))
				{
				echo "<script>alert('Edit Successfully')</script>";
				}
			}
		}
		$this->load->view("layout/header");
	    $this->load->view("layout/sidebar");
	    $this->load->view("editnews",$data);		
	   $this->load->view("layout/footer");	 
	 }
	function addnews()
	{
		$data['ms']="";
		extract($_POST);
		if(isset($sub))
		{
 $config['upload_path']= './upload/';
 $config['allowed_types']= 'gif|jpg|png';
 $this->load->library('upload', $config);
  if ( ! $this->upload->do_upload('att'))
  {
	  $data['ms']="Not uploaded image";
  }
  else
  {
	  $un=$this->session->userdata('un');
	  $im=$_FILES['att']['name'];
if($this->News_model->an($title,$cat,$des,$im,$un))
	  {
		 $data['ms']="News Added";
	  }
	  else
	  {
		$data['ms']="Already exists";  
	  }
  }
		}
	$this->load->view("layout/header");
	$this->load->view("layout/sidebar");
	$this->load->view("addnews",$data);		
	$this->load->view("layout/footer");	
	}
}
?>



