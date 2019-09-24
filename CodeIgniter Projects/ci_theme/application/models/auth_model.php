<?php
class Auth_model extends CI_Model
{
	function reg($f,$l,$m,$e,$p)
	{
		return $this->db->insert("users",array('firstname'=>$f,'lastname'=>$l,'mobile'=>$m,'email'=>$e,'password'=>$p));
	}
	function logn($e,$p)
	{
		$logq=array('email'=>$e,'password'=>$p);
		$this->db->select()->from('users')->where($logq);
		$query=$this->db->get();
		return $query->first_row('array');
	}
	
	function fetch_users()
	{
		$query=$this->db->query("select * from users");
		
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}
}