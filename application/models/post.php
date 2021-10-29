<?php
class Post extends CI_Model{
	public function getPost(){
		return $this ->db->get('competitions');
		return $this ->db->get('partidos');

	}
	public function getPostByName($name=''){
		 $this->db->query("SELECT * FROM competitions WHERE competitions = ' ".$name. "' WHERE country_id = 1");
		 return $result->row();
	}
	

}
 
