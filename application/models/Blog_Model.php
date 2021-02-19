<?php

class Blog_Model extends CI_Model{

	function __construct()
	{
    	$this->load->database();
	}
	//fetch all pictures from db
	function blog(){
		$query = $this->db->query("select * from blogs");
		return $query->result();
	}

	function blog_post($id){
		$query = $this->db->get_where('blogs', array('id'=>$id));
		return $query->result();
	}
 
}

?>