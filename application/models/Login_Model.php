<?php

class Login_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password){
        $query = $this->db->get_where('admins', array('username'=>$username, 'password'=>$password));
        return $query->row_array();
    }

    public function reset($data, $id){
        $this->db->where('registrations.id', $id);
		$this->db->update('registrations', $data);
    }   
}

?>