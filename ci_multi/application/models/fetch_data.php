<?php
class Fetch_data extends CI_Model
{
	function getFirstNames()
	{
		$query=$this->db->query('select firstname from users');
		
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;		
		}	
	}
	function getLastName()
	{
		$query=$this->db->query('select firstname,lastname from users');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}
	
	function getMobile()
	{
		$query=$this->db->query('select firstname,lastname,mobile from users');
		
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;		
		}
	}
	function getEmail()
	{
		$query=$this->db->query('select firstname,lastname,mobile,email from users');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}
	function getUsers()
	{
		$query=$this->db->query('select * from users');
		
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

?>