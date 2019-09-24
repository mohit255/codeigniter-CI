<?php
class Data_fetch extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getFirstName()
	{
		$query=$this->db->query('select firstname from users');
		if($query->num_row()>0)
		{
			return NULL;
		}
	}
	function getUsers()
	{
		$query=$this->db->query('select * from users');
		if($query->num_row()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}
}
?>