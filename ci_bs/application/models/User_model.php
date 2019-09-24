<?php
class User_model extends CI_model
{

public function __construct()
{
}

 

public function signup()
	{
	$data=array(
	
	'username'=>$this->input->post('username'),
	'password'=>md5($this->input->post('password')),
	'firstname'=>$this->input->post('name'),
	'lastname'=>$this->input->post('lastname'),
	'email'=>$this->input->post('email'),
	 'number'=>$this->input->post('number')
	);
	if($this->db->insert('userinfo',$data))
	{
	// set session id
	   		$this->session->set_userdata($data);
            $query=$this->db->get_where('userinfo',
			array('username'=>$this->input->post('username')));
            $data=$query->first_row();
            $id=$data->id;
            $this->session->set_userdata(array('user_id'=>$id));
			// user_id is session array, thats call by if(isset($_SESSION['user_id'])){ echo $_SESSION['username'];}
			return true;
	}
}

public function login()
{
//get data from login page
$data=array(
'username'=>$this->input->post('username'),
'password'=>md5($this->input->post('password'))
);
$query=$this->db->get_where('userinfo',$data);
if($data=$query->first_row())
{

            $id=$data->id;
            $username=$data->username;
            $this->session->set_userdata(array('user_id'=>$id,'username'=>$username));
			return true;
}

else
{
return false;
}

 

}

 public function writepost()
 
     {
        $data=array(
           'user_id'=>$this->input->post('user_id'),
            'title'=>$this->input->post('title'),
            'author'=>$this->input->post('author'),
            'categories'=>$this->input->post('categories'),
            'description'=>$this->input->post('description')
        );
        if($this->db->insert('postinfo',$data))
        {
            return('/');
        }
    }
 
 
 
  public function get_post($slug=null)
	//we see all post dueto slug null, nullvaalue without login, post table name, is loginpost is shown
    {
        if($slug==null)
        {
            $query=$this->db->get('postinfo');
            return $query->result_array();
        }
        else{
            $query=$this->db->get_where('postinfo',array('post_id'=>$slug));
            return $query->first_row();
        }
    }
 


function update_post($id,$data)
	{
		$this->db->where('post_id', $id);
			if($this->db->update('postinfo', $data))
			{
			return true;
			}
	} 

 public function delete($id)
    {
        if($this->db->delete('postinfo',array('post_id'=>$id)))
        {
            return true;
        }
    }



}
?>