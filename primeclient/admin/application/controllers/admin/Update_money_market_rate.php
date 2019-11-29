<?php 
class Update_money_market_rate extends CI_Controller{
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'update_money_market_rate';
        $this->load->model('admin_panel_model');
        $this->load->helper('text');
        ob_start();
    }
    public function notifitation_android_all($UsersDeviceToken,$message)
    {


        $url = "https://fcm.googleapis.com/fcm/send";
            $serverKey = 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4';
            $title = "Preferred Client App";
            $body = $message;
            $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
            $arrayToSend = array('registration_ids' => $UsersDeviceToken, 'data' => $notification,'priority'=>'high');
            $json = json_encode($arrayToSend);
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: key='. $serverKey;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

            // $response = curl_exec($ch);
            curl_exec($ch);

            curl_close($ch);

            // echo $result;
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->admin_panel_model->get_time_rates();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function update_time_deposit()
    {
        //var_dump($this->input->post());

        $id= $this->input->post('updateid');
        $ammount_range = $this->input->post('ammount_range');
        

        $time = $this->input->post('time');
        $rate =$this->input->post('rate');
        $_time = explode(",",$time);
        $_rate = explode(",",$rate);
        $query = $this->db->query("UPDATE time_deposit_rate SET time = '".$time."' , ammount_range = '".$ammount_range."', rate = '".$rate."',updated_on = '".date('M d Y h:m')."'  WHERE id ='".$id."'");
        //var_dump($this->db->last_query());
        if($query)
        {
            $notification = 'Our Time Deposit Rates for today is '.floatval($_rate[0]).'% for '.floatval($_time[0]).' Year for 1M and above';
            // $this->db->query("UPDATE `notification` SET `rates` = '".$_rate."', `time` = '".$_time."' ,send_at = '".date("Y-m-d h:i:s A")."' WHERE `notification`.`id` = 2");
            $this->db->query("UPDATE `notification` SET `notification` = '".$notification."' ,send_at = '".date("Y-m-d h:i:s A")."',read_by ='' WHERE `notification`.`id` = 2");

            // echo $notification;


            $user = $this->admin_panel_model->get_users_token();
            // var_dump($user);
            // var_dump($user[0]['device_token']);
            $users_token = array();
            for ($i=0; $i < count($user) ; $i++) { 
                # code...
                // $token = implode(",", $user[$i]['device_token']);
                array_push($users_token,$user[$i]['device_token']);
                // echo $user[$i]['device_token'];
            // echo "<br>";

            }
            // $token_string = implode(",", $token);
            // var_dump($token_string);
            // exit();
            $send_notification = $this->notifitation_android_all($users_token,$notification);



            $message='Time Deposit Rate Update Successfully.';

          $this->session->set_flashdata('success',$message); 
            //redirect("admin/update-time-deposit-rate");
          $lupdated_rates = $this->admin_panel_model->get_time_rates();
          
            // echo json_encode($lupdated_rates);

        }
        else
        {
            $message='Failed Update Time Deposit Rate';
          $this->session->set_flashdata('failed',$message); 
            redirect("admin/update-time-deposit-rate");
        }
    }
    

///////////////////////// End Mohit /////////////////



}
?>