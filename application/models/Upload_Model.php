<?php

class Upload_Model extends CI_Model{

	function __construct()
	{
    	$this->load->database();
	}
	//fetch all pictures from db
	function get_all_pics(){
		$all_pics = $this->db->get('pictures');
		return $all_pics->result();
	}
 
	//save picture data to db
	function store_data($save){

		//echo $save['pic'];
		//echo $save['title'];
		//echo $save['category'];
		//echo $save['content'];
		$query = $this->db->insert('blogs',$save);
		return $query;
		//$id = $this->db->insert_id();
	}
}

?>