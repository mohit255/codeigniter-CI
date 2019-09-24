<?php
class Articles_model extends CI_Model
{
	function add_article($article_name,$category,$article_body,$published_on)
	{
		return $this->db->insert("blog",array('article_name'=>$article_name,'category'=>$category,'article_body'=>$article_body,'published_on'=>$published_on));
	}

	function show_articles()
	{
		$query=$this->db->query('select * from blog');
		if($query->num_rows()> 0)
 		{
 			return $query->result();
 		}
 		else
 		{
 			return NULL;
 		}
	}

	function edit_article($id)
	{
		$edit = $this->db
		->select(['id','article_name','category','article_body','published_on'])
		->where('id',$id)
		->get('blog');
		return $edit->row();
	}
	
	function update_article($art_id,$data)
	{    
		return $update = $this->db->where('id',$art_id)
	                              ->update('blog', $data);
		
	}

	function delete_article($article_id)
	{
		return $this->db->delete('blog',['id'=>$article_id]);
	}
}