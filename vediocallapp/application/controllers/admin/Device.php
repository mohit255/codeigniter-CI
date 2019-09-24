<?php 
class Device extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'device';
        $this->load->model('admin_panel_model');
     ob_start();
    }
    public function index()
    {

        $this->data['page']='index';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');


    }
    public function adddevice()
    {

        $this->data['page']='add_device';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');


    }
    public function alldevice()
    {

        $this->data['page']='all_device';
        $this->data['list'] = $this->admin_panel_model->get_devices();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');


    }
     public function editdevice($id)
    {

        $this->data['page']='edit_device';
        $this->data['list'] = $this->admin_panel_model->get_device($id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');


    }
    public function deletedevice($id)
    {

        $this->data['page']='edit_device';
        $this->data['list'] = $this->admin_panel_model->delete_device($id);
        $this->load->vars($this->data);
        if($this->data['list'] == "True")
        {
            $this->session->set_flashdata('Success','Device Deleted Sucecssfully.');
        }
        else
        {
            echo "f";
        }
        redirect("admin/device/alldevice");



    }
    public function viewdevice()
    {

        $this->data['page']='view_device';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');


    }
    

}
?>