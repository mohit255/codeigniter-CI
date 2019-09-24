<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articlesmodel extends CI_Model 
{
	public function add_article($title,$im,$body)
	{
		$data = array(
        'title' => $title,
        'body' => $body,
        'img' => $im
	);
		return $this->db->insert('articles',$data);
	}

	public function articles_list()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select()
							->from('articles')
							->get();
		return $query->result();
	}

	function edit_list($id)
	{
		$edit = $this->db
							->select()
							->from('articles')
							->where('id',$id)
							->get();
		return $edit->result();
	}
	
	function update_list($art_id,$data)
	{    
		return $update = $this->db->where('id',$art_id)
	                              ->update('articles', $data);
		
	}

	function delete_list($article_id)
	{
		return $this->db->delete('articles',['id'=>$article_id]);
	}
}
