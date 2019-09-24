<?php 
class Company extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'company';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function addcompany()
    {
        $this->data['page']='add_company';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
     public function addnewcompany()
    {
      if($this->input->post('company_name') != "")
      {
        //var_dump($this->input->post());
        date_default_timezone_set('Asia/Kolkata');
        $no_devices = (int)$this->input->post('noofdevices');
        $cmp_name = $this->input->post('company_name');
        $created_on = date("d-m-Y h:i:s A");
        $data = array(
          'company_name' => $this->input->post('company_name'), 
          'company_address' => $this->input->post('company_address'), 
          'contact_person' => $this->input->post('contact_person'), 
          'contact_number' => $this->input->post('contact_number'), 
          'noofdevices' => $this->input->post('noofdevices'), 
          'password' => $this->input->post('password'), 
          'created_on' => date("d-m-Y h:i:s A") 
      );
        //var_dump($data);

        $this->data['list'] = $this->admin_panel_model->add_new_company($data);

        // var_dump($this->data['list']);

        $insert_id = $this->data['list'];

        if ($this->data['list']) {
          for ($i=0;$i<$no_devices;$i++) 
          {
             $devices_array = array(
              array(
              'company_id' => $insert_id ,
               'device_id' =>  substr($cmp_name,0,4)."#".rand(9000,10000) ,
                'created_on' => $created_on,
                 'created_by' => 'Admin'
               )
             );
             $query = $this->db->insert_batch('devices', $devices_array);
          }

          $message='Company Added  successfully.';
          $this->session->set_flashdata('message',$message); 

        }
        
        else
        {
          $message='Company Allready exist!';
        $this->session->set_flashdata('already',$message);
        } 

      }
      else
      {
       
        $message='Something Went Wrong , Try Again!';
        $this->session->set_flashdata('error',$message);
      }
      redirect("admin/company/addcompany");

 
    }
    public function editcompany($id)
    {
        $this->data['page']='edit_company';
        $this->data['list'] = $this->admin_panel_model->get_company($id);
        $this->data['device_list'] = $this->admin_panel_model->get_company_device($id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function editcompanydetails($id)
    {
        $this->data['page']='edit_company_details';
        $this->data['list'] = $this->admin_panel_model->edit_company_details($id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function updatecompany()
    {
      // var_dump($this->input->post());
        $id = $this->input->post('id');
        $company_name = $this->input->post('company_name');
        $company_address = $this->input->post('company_address');
        $contact_person = $this->input->post('contact_person');
        $contact_number = $this->input->post('contact_number');
        $noofdevices = $this->input->post('noofdevices');
        $password = $this->input->post('password');



        $update_data=array(
          'company_name'=>$company_name,
           'company_address'=>$company_address,
            'contact_person'=>$contact_person,
             'contact_number'=>$contact_number,
              'noofdevices'=>$noofdevices,
               'password'=>$password
          ); 
 
        $update=$this->admin_panel_model->update_company($update_data,$id);
        if($update){
        $messag="Company Edited Successfully";
        $this->session->set_flashdata("success",$messag);
        }else{
          $messag='Company Already Exist.';
        $this->session->set_flashdata("Already",$messag);
        }
        redirect("admin/company/editcompanydetails/".$id);
        
      }
      public function deletecompany($id)
      {
          $this->admin_panel_model->delete_company($id);
          if (True) {
            $this->session->set_flashdata('success','Company Deleted successfully.');
          }
          else
          {
            $this->session->set_flashdata('failed','Something Went wrong !');
          }
          redirect("admin/");

      }


///////////////////////// End Mohit /////////////////



}
?>