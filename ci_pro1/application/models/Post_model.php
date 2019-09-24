<?php
class Post_model extends CI_Model
 {
   function an($t,$d,$i)
   {
	return $this->db->insert('blog',array('title'=>$t,'descp'=>$d,'img'=>$i));   
   }
   function fe()
   {
	  $sel=$this->db->get("blog");
	  return $sel->result_array();   
   }
 }
?>