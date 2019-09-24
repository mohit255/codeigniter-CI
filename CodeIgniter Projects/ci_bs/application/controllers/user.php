<?php 
class User extends CI_Controller
{
 
 public function signup()
    {
        if($this->user_model->signup())
        {
            redirect('/');
        }
    }

public function login()
	{
	if($this->user_model->login())
		{
            redirect('/');
		}
	
	}

public function writepost()
	{
	if($this->user_model->writepost())
		{
            redirect('/');
		}
	
	}
	
	
public function postupdate()
	{
	if($this->user_model->writepost())
		{
            redirect('/');
		}
	
	}
	
		 
public function edit($id)
    {
        $data['post']=$this->user_model->get_post($id);
        $this->load->view('header');
		$this->load->view('sidebar');
        $this->load->view('post_update',$data); 
    }
		
		
public function updateit() 
{
$id= $this->input->post('id');
$data = array(
            'title'=>$this->input->post('title'),
            'author'=>$this->input->post('author'),
            'categories'=>$this->input->post('categories'),
            'description'=>$this->input->post('description')
		);
	if($this->user_model->update_post($id,$data))
   		{
            redirect('/');
        }
 
}		
		

	public function delete($id)
	   {
        if($this->user_model->delete($id))
        {
            redirect('/');
        }
    }

		
		

}
?>