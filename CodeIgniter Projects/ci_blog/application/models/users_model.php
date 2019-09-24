<?php
class Users_model extends CI_Model
{
	function register($username,$password,$age,$city,$role)
	{
		return $this->db->insert("users",array('username'=>$username,'password'=>$password,'age'=>$age,'city'=>$city,'role'=>$role));
	}
	function login($username,$password,$role)
	{
		$da=array('username'=>$username,'password'=>md5($password),'role'=>$role);
		$this->db->select()->from('users')->where($da);
		$query = $this->db->get();
		return $query->first_row('array');
	}
}