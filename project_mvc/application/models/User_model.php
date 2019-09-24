<?php
class User_model extends CI_Model
{
	function in($u,$p,$a,$c,$r)
	{
		return $this->db->insert("users",array
		('uname'=>$u,'pass'=>$p,'age'=>$a,'city'=>$c,'role'=>$r));
	}
	function lo($u,$pass,$r)
	{
		$da=array('uname'=>$u,'pass'=>md5($pass),'role'=>$r);
		$this->db->select()->from('users')->where($da);
		$query = $this->db->get();
		return $query->first_row('array');
	}
}
?>