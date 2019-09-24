<?php
class Fetch_data extends CI_Model
{
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