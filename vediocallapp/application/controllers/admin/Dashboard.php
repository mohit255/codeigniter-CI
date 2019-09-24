<?php
class Dashboard extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'dashboard';
    $this->load->model('admin_login_model');    
    $this->load->model('admin_panel_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['list'] = $this->admin_panel_model->get_companies();        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    public function is_valid_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');    
        $result = $this->admin_login_model->is_valid_login($username,$password);   
        if(!empty($result))
        {                
            $this->session->set_userdata('id',$result['ADMINID']);  
            $this->session->set_userdata('SESSION_USER_ID',$result['ADMINID']);  
            $this->session->set_userdata('user_role',$result['user_role']);   
            echo 1;
        }
     else 
        { 
            $this->session->set_flashdata('message','wrong login credantiales!');
            echo 2;
            
        }
    }
    public function logout() 
    {
        if (!empty($this->session->userdata['id'])) 
            {
                $this->session->unset_userdata('id');
                $this->session->unset_userdata('user_role');
                $this->session->unset_userdata('SESSION_USER_ID');
            }
        redirect(base_url($this->data['theme']));
    }
}

?>
