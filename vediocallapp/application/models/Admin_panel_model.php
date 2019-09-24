<?php
class admin_panel_model extends CI_Model
{


	public function add_new_company($data)
	{
	    $query = $this->db->insert('companies',$data);
	    $insert_id = $this->db->insert_id();
	    return  $insert_id;
	}

    public function get_companies()
    {        
        $query = $this->db->query("SELECT * FROM `companies` ORDER BY id DESC");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
    public function get_company($id)
    {        
        $query = $this->db->query("SELECT * FROM `companies`  WHERE id='$id' ORDER BY id DESC");
        // var_dump($this->db->last_query());
        $result = $query->row_array();
        return $result;                  
    }
    public function edit_company_details($id)
    {        
        $query = $this->db->query("SELECT * FROM `companies`  WHERE id='$id'");
        // var_dump($this->db->last_query());
        $result = $query->row_array();
        return $result;                  
    }
    public function update_company($update_data,$id){

    
		$check_data=$this->db->query("SELECT * FROM companies WHERE company_name='".$update_data["company_name"]."' AND id !='".$id."'")->result_array();
		if(@$check_data)
		{
		    return false;
		}else{
		    
		    
		$this->db->where('id', $id);
		 
		$result=$this->db->update('companies', $update_data);

		return $result;
		// $this->db->last_query();
		}
	}
	public function add_new_company_devices($devices_array,$no_devices)
	{
		for ($i=0; $i < $no_devices ; $i++) { 
			// $query = $this->db->insert('devices',$devices_array);
			$query = $this->db->insert_batch('devices', $devices_array); 
			var_dump($this->db->last_query());
		}
	    
	    return $query;
	}
    public function delete_company($id)
    {
        $query = $this->db->query("DELETE FROM companies WHERE id  ='".$id."'");
        return $query; 
    }


    

//////////////////// Devices //////////////////


    public function get_devices()
    {        
        $query = $this->db->query("SELECT a.*,b.company_name FROM `devices` as a, `companies` as b WHERE b.id=a.company_id ORDER BY `a`.`id`");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
     public function get_device($id)
    {        
        $query = $this->db->query("SELECT * FROM `devices`  WHERE id='$id' ORDER BY id DESC");
        // var_dump($this->db->last_query());
        $result = $query->row_array();
        return $result;                  
    }
    public function get_company_device($id)
    {        
        $query = $this->db->query("SELECT * FROM `devices`  WHERE company_id='$id' ORDER BY id DESC");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
    public function delete_device($id)
    {        
        $query = $this->db->query("DELETE FROM `devices`  WHERE id='$id'");
        return $query; 
                  
    }
    


//////////////End Mohit ////////////









    
    public function delete_po($ids)
    {
        // var_dump($ids);
      
        $query = $this->db->query("DELETE FROM post WHERE id  ='$ids'");
        // var_dump($this->db->last_query());
     
     
     
        return $query; 
               
    }
    
    public function delete_report($id,$post_id)
    {
      
        $query1 = $this->db->query("DELETE FROM user_manage_report WHERE id='".$id."'");
        $query2 = $this->db->query("DELETE FROM post WHERE id='".$post_id."'");
       
         return $query1; 
               
    }
    public function delete_post($id)
    {
      
       $query = $this->db->query("DELETE FROM post WHERE id ='".$id."'");
        return $query; 
               
    }
    



 public function delete_country($id)
    {
      
        $query = $this->db->query("DELETE FROM country WHERE user_id  ='$id' ");
      
        return $query; 
               
    }




    public function activate($id){
$this->db->query("UPDATE users SET status = 0
                  WHERE id ='".$id."'");
    }



public function deactivate($id){
$this->db->query("UPDATE users SET status = 1 
                  WHERE id ='".$id."'");
                
}

public function deact($id){
$this->db->query("UPDATE country SET status = 0 
                  WHERE id ='".$id."'");
// $this->load->view('admin/country/county');
}






public function updateFeel($update_userdata,$fid){
    
    $check_data=$this->db->query("SELECT * FROM feeling WHERE name='".$update_userdata["name"]."' AND id !='".$fid["id"]."'")->result_array();
if(@$check_data)
{
    return false;
}
   else{ 
    
    

  
$this->db->where('id', $fid);
 
$result=$this->db->update('feeling', $update_userdata);
return $result;
}
}

public function updatesubFeel($update_userdata,$ffid){
    
    $check_data=$this->db->query("SELECT * FROM feeling WHERE name='".$update_userdata["name"]."' AND id !='".$ffid."'")->result_array();
if(@$check_data)
{
    return false;
}else{
    
    
$this->db->where('id', $ffid);
 
$result=$this->db->update('feeling', $update_userdata);

return $result;
// $this->db->last_query();
}
}

public function feeling_insert($data){ 

$check_data=$this->db->query("SELECT * FROM feeling WHERE name='".$data["name"]."'")->result_array();
if(@$check_data)
{
    return false;
}
else
{
  // Inserting in Table(country) of Database(country)
$result=$this->db->insert('feeling', $data);
//  $result=$this->db->update('country', $data);
 return $result;    
}


}



     public function get_password()
    {        
        $query = $this->db->query("SELECT * FROM `administrators` ");
        $result = $query->result_array();
        return $result;                  
    }
    public function getcurrentpassword($userid)
    {
        $query = $this->db->where(['ADMINID' => $userid])
                                    ->get('administrators');
                                    if($query->num_rows() > 0){
                                        return $query->row();
                                    }
    }
    
    public function updatepassword($new_pass, $userid){
        
        $data = array(
            'password' => $new_pass
            
            );
            return $this->db->where('ADMINID',$userid)
                                    ->update('administrators', $data);
        
    }
    
      public function get_setting()
    {        
        $query = $this->db->query("SELECT * FROM `setting` ");
        $result = $query->result_array();
        return $result;                  
    }
    
    
     public function get_about()
    {        
        $query = $this->db->query("SELECT * FROM `about_us` ");
        $result = $query->result_array();
        return $result;                  
    }
    
    
   
    
    public function get_support()
    {        
          $query = $this->db->query("SELECT a.*,b.support_msg,b.description FROM users as a, support as b WHERE b.user_id=a.id ORDER BY `a`.`id` DESC");
          $result = $query->result_array();
          return $result;                
    }



public function get_country()
    {        
        $query = $this->db->query(" SELECT * FROM `country`");
        $result = $query->result_array();
        return $result;                  
    }
    
    public function get_feeling()
    {        
        $query = $this->db->query(" SELECT * FROM `feeling` WHERE parrent = '' ");
        $result = $query->result_array();
        return $result;                  
    }


    
    
    public function updateEmoji($update_emojiydata,$id){
$this->db->where('id', $id);
$result=$this->db->update('manage_emoji', $update_emojidata);
return $result;
}

public function add_emoji($data)
{
    $this-> db->insert('manage_emoji',$data);
}

    public function edit_user($id)
    {
        $query = $this->db->query("SELECT `id`,`name`,`email`,`dob`,`gender`,`country`,`verified`,`status` FROM `users`  WHERE `id` = $id");
        $result = $query->row_array(); 
        return $result;           
    }
    public function get_ads($start,$end)
    {
        if(empty($start)&&empty($end))
        {
        $query = $this->db->query("SELECT * FROM `ads` ;");
        $result = $query->result_array(); 
        return $result;         
        }
        else 
        {
        $query = $this->db->query("SELECT * FROM `ads` LIMIT $start , $end ;");
        $result = $query->result_array(); 
        return $result;    
        }
    } 
    public function edit_ads($id)
    {
        $query = $this->db->query("SELECT * FROM `ads` WHERE `ads_id` = $id ");
        $result = $query->row_array(); 
        return $result;            
    }
    public function get_review($start,$end)
    {
		$last_append = '';
        if($start||$end!=0)
        {
        $last_append = " LIMIT $start , $end";   
        }
        /*$query = $this->db->query("SELECT gigs_reviews.review_id,gigs_reviews.`review`,members.fullname,gigs.gig_title,gigs_reviews.`created_date`,gigs_reviews.`status` FROM `gigs_reviews`
                                    INNER JOIN members ON members.USERID = gigs_reviews.`user_id`
                                    INNER JOIN gigs ON gigs.id = gigs_reviews.`gig_id`");*/
		$query = $this->db->query("SELECT  feedback.*,members.fullname,sell_gigs.title FROM `feedback`
                                    INNER JOIN members ON members.USERID = feedback.`from_user_id`
                                    INNER JOIN sell_gigs ON sell_gigs.id = feedback.`gig_id`
									ORDER BY feedback.id DESC ".$last_append." ");
        $result = $query->result_array(); 
        return $result;                    
    }
    public function edit_review($id)
    {
        $query = $this->db->query("SELECT gigs_reviews.review_id,gigs_reviews.`review`,members.fullname,gigs.gig_title,gigs_reviews.`created_date`,gigs_reviews.`status` FROM `gigs_reviews`
                                    INNER JOIN members ON members.USERID = gigs_reviews.`user_id`
                                    INNER JOIN gigs ON gigs.id = gigs_reviews.`gig_id`
                                    WHERE gigs_reviews.`review_id` = $id ");
        $result = $query->row_array(); 
        return $result;                    
    }
    public function get_admin_profile($id)
    {
        $query = $this->db->query("SELECT * FROM `administrators` WHERE `ADMINID` = $id");
        $result = $query->row_array(); 
        return $result;                            
    }
    public function get_client_list()
    {
        $query = $this->db->query("SELECT * FROM  `client` ");
        $result = $query->result_array(); 
        return $result;          
    }
    public function get_footer_menu($end , $start)
    {        
        $query = $this->db->query("SELECT * FROM  `footer_menu` LIMIT $start , $end ");
        $result = $query->result_array(); 
        return $result;                  
    }
    public function get_footer_submenu($end , $start)
    {        
        $query = $this->db->query("SELECT footer_submenu.*,footer_menu.title FROM `footer_submenu`
                                    INNER JOIN footer_menu ON footer_menu.id = footer_submenu.`footer_menu`
                                    LIMIT $start , $end ");
        $result = $query->result_array(); 
        return $result;                  
    }
     public function get_all_footer_menu()
    {        
        $query = $this->db->query("SELECT * FROM  `footer_menu` ");
        $result = $query->result_array(); 
        return $result;                  
    }
    public function get_all_footer_submenu()
    {        
        $query = $this->db->query("SELECT footer_submenu.*,footer_menu.title FROM `footer_submenu`
                                    INNER JOIN footer_menu ON footer_menu.id = footer_submenu.`footer_menu` ");
        $result = $query->num_rows(); 
        return $result;                  
    }
	    public function edit_terms($id)
    {
        $query = $this->db->query("SELECT *
                                    FROM  term
                                    WHERE id= $id ");
            $result = $query->result_array(); 
        return $result;                          
    }
    public function edit_submenu($id)
    {
        $query = $this->db->query("SELECT footer_submenu . * , footer_menu.title
                                    FROM  `footer_submenu` 
                                    INNER JOIN footer_menu ON footer_menu.id = footer_submenu.`footer_menu` 
                                    WHERE footer_submenu.id = $id ");
            $result = $query->result_array(); 
        return $result;                          
    }
   
	 public function new_notification()
	{
		$query = $this->db->query("SELECT * FROM 
			(SELECT payments.id, `members`.`fullname` AS buyer_name, payments.created_at AS created_date , `members`.`username` AS buyer_username, sell_gigs.title , 'buyed' as status
			, (SELECT gigs_image.`gig_image_thumb` FROM `gigs_image` WHERE gigs_image.gig_id =  payments.gigs_id LIMIT 0 , 1 ) AS gig_image_thumb
			FROM  `payments` 
			INNER JOIN members ON payments.`USERID` =  `members`.`USERID` 
			INNER JOIN sell_gigs ON payments.`gigs_id` = sell_gigs.id
			WHERE payments.seller_status = 1
			AND payments.admin_notification_status =1
			UNION
			SELECT payments.id, `members`.`fullname` AS buyer_name, payments.created_at AS created_date , `members`.`username` AS buyer_username, sell_gigs.title , 'completed' as status
			, (SELECT gigs_image.`gig_image_thumb` FROM `gigs_image` WHERE gigs_image.gig_id =  payments.gigs_id LIMIT 0 , 1 ) AS gig_image_thumb
			FROM  `payments` 
			INNER JOIN members ON payments.`seller_id` =  `members`.`USERID` 
			INNER JOIN sell_gigs ON payments.`gigs_id` = sell_gigs.id
			WHERE payments.seller_status = 6
			AND payments.admin_notification_status =1
			UNION
			SELECT sell_gigs.id, `members`.`fullname` AS buyer_name, sell_gigs.created_date AS created_date , `members`.`username` AS buyer_username, sell_gigs.title , 'new_gig' as status
			, (SELECT gigs_image.`gig_image_thumb` FROM `gigs_image` WHERE gigs_image.gig_id = sell_gigs.id LIMIT 0 , 1 ) AS gig_image_thumb
			FROM  `sell_gigs` 
			INNER JOIN members ON sell_gigs.`user_id` =  `members`.`USERID` 
			WHERE sell_gigs.notification_status =1
			UNION
			SELECT payments.id, `members`.`fullname` AS buyer_name, payments.created_at AS created_date , `members`.`username` AS buyer_username, sell_gigs.title , 'payment_request' as status
			, (SELECT gigs_image.`gig_image_thumb` FROM `gigs_image` WHERE gigs_image.gig_id =  payments.gigs_id LIMIT 0 , 1 ) AS gig_image_thumb
			FROM  `payments` 
			INNER JOIN members ON payments.`seller_id` =  `members`.`USERID` 
			INNER JOIN sell_gigs ON payments.`gigs_id` = sell_gigs.id
			WHERE payments.seller_status = 6
			AND payments.payment_status =1
			UNION
			SELECT payments.id, `members`.`fullname` AS buyer_name, payments.created_at AS created_date , `members`.`username` AS buyer_username, sell_gigs.title , 'payment_decline' as status
			, (SELECT gigs_image.`gig_image_thumb` FROM `gigs_image` WHERE gigs_image.gig_id =  payments.gigs_id LIMIT 0 , 1 ) AS gig_image_thumb
			FROM  `payments` 
			INNER JOIN members ON payments.`seller_id` =  `members`.`USERID` 
			INNER JOIN sell_gigs ON payments.`gigs_id` = sell_gigs.id
			WHERE payments.seller_status = 5 AND payments.decline_accept =1 AND payment_status!=2
			UNION
			SELECT payments.id, `members`.`fullname` AS buyer_name, payments.created_at AS created_date , `members`.`username` AS buyer_username, sell_gigs.title , 'payment_cancel' as status
			, (SELECT gigs_image.`gig_image_thumb` FROM `gigs_image` WHERE gigs_image.gig_id =  payments.gigs_id LIMIT 0 , 1 ) AS gig_image_thumb
			FROM  `payments` 
			INNER JOIN members ON payments.`seller_id` =  `members`.`USERID` 
			INNER JOIN sell_gigs ON payments.`gigs_id` = sell_gigs.id
			WHERE payments.cancel_accept =1 AND payment_status!=2
			
			) a ORDER BY a.created_date DESC ");    
		$result = $query->result_array();
		return $result; 
				
				
	}
	 public function get_allpayment_list($start,$end)
    {
		$last_append = '';
        if($start||$end!=0)
        {
        $last_append = " LIMIT $start , $end";   
        }
        $query = $this->db->query("SELECT a.*,a.id as newid,g.*,gi.*, s.fullname as buyer_name,s.user_thumb_image as buyerimage, s.description ,s.user_profile_image as sellerimage, sm.fullname as seller_name ,sm.user_thumb_image,ba.paypal_email_id
                                    FROM  `payments`as a
                                    LEFT JOIN bank_account as ba ON ba.user_id = a.seller_id
									LEFT JOIN members as s ON s.USERID = a.USERID	
									LEFT JOIN sell_gigs as g ON g.user_id =a.seller_id
									LEFT JOIN gigs_image as gi ON gi.gig_id =g.id
									LEFT JOIN members as sm ON sm.USERID = a.seller_id group by a.id ".$last_append." ");
            $result = $query->result_array(); 
        return $result;                          
    }
	public function get_completepayment_list($type, $start, $end)
    {
		$last_append = '';
        if($type==1)
        {
        $last_append = "LIMIT $start , $end";   
        }
        $query = $this->db->query("SELECT a.*, s.fullname as buyer_name, sm.fullname as seller_name ,ba.paypal_email_id
                                    FROM  `payments`as a
                                    LEFT JOIN bank_account as ba ON ba.user_id = a.seller_id
                                    LEFT JOIN members as s ON s.USERID = a.USERID   
                                    LEFT JOIN members as sm ON sm.USERID = a.seller_id 
                                    WHERE a.seller_status = 6 ".$last_append."" );
									 

              // SELECT a.*, s.fullname as buyer_name, sm.fullname as seller_name ,ba.paypal_email_id
              //                       FROM  `payments`as a
              //                       LEFT JOIN bank_account as ba ON ba.user_id = a.seller_id
              //                       LEFT JOIN members as s ON s.USERID = a.USERID   
              //                       LEFT JOIN members as sm ON sm.USERID = a.seller_id 
              //                       WHERE a.seller_status=6 ".$last_append."
									
            if($type==0){
			 $result = $query->num_rows(); 
			}else { 
			  
				$result = $query->result_array(); 
			}
			 
			 
        return $result;                          
    }  
	public function get_declinepayment_list($type, $start, $end)
    {
		$last_append = '';
        if($type==1)
        {
        $last_append = " LIMIT $start , $end";   
        }
        $query = $this->db->query("SELECT a.*, s.fullname as buyer_name, sm.fullname as seller_name ,ba.paypal_email_id
                                    FROM  `payments`as a
                                    LEFT JOIN bank_account as ba ON ba.user_id = a.USERID
									LEFT JOIN members as s ON s.USERID = a.USERID	
									LEFT JOIN members as sm ON sm.USERID = a.seller_id 
									WHERE a.seller_status=5 ".$last_append." ");
									
            if($type==0){
			 $result = $query->num_rows(); 
			}else { 
				$result = $query->result_array(); 
			}
        return $result;                          
    }  
	public function get_Pendingpayment_list($type, $start, $end)
    {
		$last_append = '';
        if($type==1)
        {
        $last_append = " LIMIT $start , $end";   
        }
        $query = $this->db->query("SELECT a.*, s.fullname as buyer_name, sm.fullname as seller_name ,ba.paypal_email_id
                                    FROM  `payments`as a
                                    LEFT JOIN bank_account as ba ON ba.user_id = a.seller_id
									LEFT JOIN members as s ON s.USERID = a.USERID	
									LEFT JOIN members as sm ON sm.USERID = a.seller_id 
									WHERE (a.seller_status=2 OR a.seller_status=3) ".$last_append." ");
			
			if($type==0){
			 $result = $query->num_rows(); 
			}else { 
				$result = $query->result_array(); 
			}
        return $result;                          
    } 


    public function get_rejected_list()

    {

        /*$query = $this->db->query("SELECT br.*,m.username as seller_name,m1.username as buyer_name,p.seller_status,p.payment_status,sg.title FROM buyer_rejected_list br LEFT JOIN members m on m.USERID = br.seller_id LEFT JOIN members m1 on m1.USERID = br.buyer_id LEFT JOIN payments p on p.seller_status = m.USERID LEFT JOIN sell_gigs sg on sg.user_id = br.seller_id");*/


        $query = $this->db->query("SELECT BRL.*,M.fullname as buyername ,M1.fullname as sellername,SG.title as gig_name,p.id as                        seller_order FROM buyer_rejected_list BRL 
                                    LEFT JOIN sell_gigs SG ON SG.id= BRL.gig_id 
                                    LEFT JOIN members M ON M.USERID= BRL.buyer_id 
                                    LEFT JOIN payments p on p.id = BRL.order_id
                                    LEFT JOIN members M1 ON M1.USERID= BRL.seller_id ORDER by id desc");
        //echo$this->db->last_query();exit;

        $result = $query->result_array(); 

        return $result;   

    }

    public function reject_accept($change_reject_status,$id,$order_id)
    {
        $query = $this->db->query("UPDATE buyer_rejected_list SET status = '".$change_reject_status."',rejected_request = 1 WHERE id = '".$id."'");

        $query = $this->db->query("UPDATE payments SET seller_status = 3 WHERE id = '".$order_id."'");

      //echo$this->db->last_query();exit;
        
        return $query;
    }


    public function cancel_request($list_id)
    {

        //$id = $this->session->userdata('SESSION_USER_ID');

            $request = $this->db->query("SELECT b.*,m.username as seller_name,m.email as seller_email, a.name as admin_name,a.email as                                  admin_email,m1.username as buyer_name,s.title from buyer_rejected_list b
                                LEFT JOIN members m on m.USERID = b.seller_id
                                LEFT JOIN members m1 on m1.USERID = b.buyer_id
                                LEFT JOIN sell_gigs s on s.user_id = b.seller_id
                                LEFT JOIN administrators a on a.ADMINID = 2
                                WHERE b.id = $list_id");

       //echo $this->db->last_query();exit;



        $result = $request->row_array();


        return $result;
    }


	public function get_cancelpayment_list($type, $start, $end)
    {
		$last_append = '';
        if($type==1)
        {
        $last_append = " LIMIT $start , $end";   
        }
        $query = $this->db->query("SELECT a.*,s.email as buyer_email, s.fullname as buyer_name, sm.fullname as seller_name ,ba.paypal_email_id
                                    FROM  `payments`as a
                                    LEFT JOIN bank_account as ba ON ba.user_id = a.USERID
									LEFT JOIN members as s ON s.USERID = a.USERID	
									LEFT JOIN members as sm ON sm.USERID = a.seller_id 
									WHERE a.buyer_status=1 ".$last_append." ");
									
		if($type==0){
			 $result = $query->num_rows(); 
		}else { 
			$result = $query->result_array(); 
		} 
        return $result;                          
    }  
      // All Payment Details (Incoming withdrawl , cancel , decline )
     public function get_all_list($type, $start, $end)
    {
        $last_append = '';
        if($type==1)
        {
       // $last_append = " LIMIT $start , $end";   
        }
				$query_string ="SELECT a.*, s.fullname as buyer_name,va.paypal_email_id as buyer_paybalemail,s.email as buyer_email,sg.title,sm.email as selleremail, sm.fullname as seller_name ,ba.paypal_email_id FROM  `payments`as a
                            LEFT JOIN bank_account as ba ON ba.user_id = a.USERID
                            LEFT JOIN sell_gigs as sg ON sg.id = a.gigs_id
                            LEFT JOIN members as s ON s.USERID = a.USERID   
                            LEFT JOIN members as sm ON sm.USERID = a.seller_id 
							 LEFT JOIN bank_account as va ON va.user_id = a.seller_id
							WHERE  (a.payment_status = 1 OR a.cancel_accept = 1 OR a.decline_accept = 1) AND a.payment_status != 2 ".$last_append."";
			$query = $this->db->query($query_string);			
			// Where condition apply need request payment and cancel or decline 	
				//WHERE  (a.buyer_status=1 OR a.seller_status=5) AND a.payment_status != 2					
				//WHERE  a.payment_status = 2 OR a.buyer_status=1 OR a.seller_status=5					
				//WHERE (a.payment_status != 2 AND a.buyer_status=1) OR (a.payment_status != 2 AND a.seller_status=5) ".$last_append."	
				//WHERE (a.payment_status != 2 AND a.buyer_status=1) OR (a.payment_status != 2 AND (a.seller_status=5 OR a.seller_status=6)) 
									
        if($type==0){
             $result = $query->num_rows(); 
        }else { 
            $result = $query->result_array(); 
        } 
		
        return $result;                          
    }    
   /*   public function get_all_list($type, $start, $end)
    {
        $last_append = '';
        if($type==1)
        {
       // $last_append = " LIMIT $start , $end";   
        }
				$query_string ="SELECT a.*, s.fullname as buyer_name,s.email as buyer_email,sg.title,sm.email as selleremail, sm.fullname as seller_name,va.paypal_email_id as buyer_paybalemail,ba.paypal_email_id FROM  `payments`as a
                            LEFT JOIN bank_account as ba ON ba.user_id = a.USERID
                           
                            LEFT JOIN sell_gigs as sg ON sg.id = a.gigs_id
                            LEFT JOIN members as s ON s.USERID = a.USERID   
						    LEFT JOIN bank_account as va ON ba.user_id = s.USERID
                            LEFT JOIN members as sm ON sm.USERID = a.seller_id 
							WHERE  (a.payment_status = 1 OR a.cancel_accept = 1 OR a.decline_accept = 1) AND a.payment_status != 2 ".$last_append."";
			$query = $this->db->query($query_string);				
			// Where condition apply need request payment and cancel or decline 	
				//WHERE  (a.buyer_status=1 OR a.seller_status=5) AND a.payment_status != 2					
				//WHERE  a.payment_status = 2 OR a.buyer_status=1 OR a.seller_status=5					
				//WHERE (a.payment_status != 2 AND a.buyer_status=1) OR (a.payment_status != 2 AND a.seller_status=5) ".$last_append."	
				//WHERE (a.payment_status != 2 AND a.buyer_status=1) OR (a.payment_status != 2 AND (a.seller_status=5 OR a.seller_status=6)) 
									
        if($type==0){
             $result = $query->num_rows(); 
        }else { 
            $result = $query->result_array(); 
        } 
		
        return $result;                          
    }           */

     public function edit_payment_gateway($id)
    {
        $query = $this->db->query(" SELECT * FROM `payment_gateways` WHERE `id` = $id ");
        $result = $query->row_array();
        return $result;
    }

     public function all_payment_gateway()
    {
      $this->db->select('*');
        $this->db->from('payment_gateways');
        //$this->db->where('Id',$id);
        $query = $this->db->get();
        return $query->result_array();         
    } 

    public function gig_preview($id){

        $query = $this->db->query("SELECT * FROM  sell_gigs WHERE  md5(id) = '".$id."'");
        
        if($query->num_rows() > 0){
            $data = $query->row_array();
            $gig_id = $data['id'];
            $data['extra_gigs'] = array();
            $data['gig_images'] = array();

            $query1 = $this->db->query("SELECT * FROM  extra_gigs WHERE   gigs_id = $gig_id");
            if($query1->num_rows() > 0){
               $extra_gig = $query1->result_array(); 
               $data['extra_gigs'] = $extra_gig;
            }
            $query2 = $this->db->query("SELECT * FROM gigs_image WHERE   gig_id = $gig_id");
            if($query2->num_rows() > 0){
               $gig_images = $query2->result_array(); 
               $data['gig_images'] = $gig_images;
            }
            return $data;
        }else{
            return FALSE;
        }

    }
    public function smtp_setting() {
       $data = array();
       $stmt = "SELECT * FROM system_settings ORDER BY id ASC";
       $query = $this->db->query($stmt);
       if ($query->num_rows()) {
           $data = $query->result_array();
       }
       return $data;
   }
   
   
   public function get_subfeeling()
{

          $query = $this->db->query(" SELECT *, count(id) as total FROM `feeling` WHERE parrent != ''  && status = 0 group by name ");
        $result = $query->result_array();
        return $result; 
}
    
}
?>