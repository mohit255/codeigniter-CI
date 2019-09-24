<?php
class Model_users extends CI_Model
{
	function __construct()
	{
		parent::__construct(); //call the model cunstructor
	}
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