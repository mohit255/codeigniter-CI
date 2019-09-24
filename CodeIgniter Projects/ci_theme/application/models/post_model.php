<?php
class Post_model extends CI_Model
{
	function post_up($pe,$pl,$po)
	{
		return $this->db->insert("blog",array('post_by'=>$pe,'post_title'=>$pl,'post'=>$po));
	}
	function getPosts()
	{
		$query=$this->db->query('select * from blog');
		
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return NULL;		
		}
	}
	function edit_post($p_id)
	{
		$edit = $this->db
		->select(['id','post_title','post'])
		->where('id',$p_id)
		->get('blog');
		return $edit->row();
	}
 /*	function update_post($up_id,$upt,$up)
	{
		return $update = $this->db
		->where('id',$up_id)
		->update("blog",array('post_title'=>$upt,'post'=>$up));
	}
 */
 	function post_update($id,$udata)
	{
		return $update = $this->db->where('id',$id)
	                              ->update('blog', $udata);
	}
	function delete_post($pid)
	{
		return $this->db->delete('blog',['id'=>$pid]);
	}
}