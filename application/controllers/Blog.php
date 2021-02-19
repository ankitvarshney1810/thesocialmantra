<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('login_model');
		$this->load->library('form_validation');
    }

    public function index(){

        //load the database  
        $this->load->database();  
        //load the model  
		$this->load->model('Blog_Model');  
		
		$result['data']=$this->Blog_Model->blog();
		$this->load->view('blog',$result);


				
    }
		
	public function blog_post(){
        //load the database  
        $this->load->database();  
        //load the model  
		$this->load->model('Blog_Model');  
		$id = $this->uri->segment(4);
		$result['data']=$this->Blog_Model->blog_post($id);
		
		$this->load->view('blog_post',$result);
	}





    public function admin(){

		  //load session library
		  $this->load->library('session');
      
		  //restrict users to go back to login if session has been set
		  if($this->session->userdata('user')){
		  	$this->load->view('home');
		  }
		  else{
		  	$this->load->view('login');
		  }

    }

    
  public function login_user(){
		//load session library
		$this->load->library('session');
 
		$username = $_POST['username'];
		$password = $_POST['password'];
 
		$data = $this->login_model->login($username, $password);
 
		if($data){
			$this->session->set_userdata('user', $data);
			$this->load->view('home');
		}
		else{
			$this->session->set_flashdata('error','Invalid login. User not found');
			redirect('../blog/admin');
		} 
	}











	public function upload(){
		$this->load->view('use');
	}


    public function upload_file(){
        $config['allowed_types'] = 'jpg|png';
        $config['upload_path'] = './uploads/';
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('upload')) {
            print_r($this->upload->data());
        } else {
            print_r($this->upload->display_errors());
        }
        
    }
















	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('../blog/admin');
	}





}




?>