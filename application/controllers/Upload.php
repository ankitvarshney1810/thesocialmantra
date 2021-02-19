<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Upload_Model');
		$this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('use');
    }

    public function do_upload(){
        //validate the form data 
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
 
        if ($this->form_validation->run() == FALSE){
            $this->load->view('home');
        }else{
            
            //get the form values
            $data['title'] = $this->input->post('title', TRUE);
            $data['category'] = $this->input->post('category', TRUE);
            $data['content'] = $this->input->post('content', TRUE);
 
            //file upload code 
            //set file upload settings 
            $config['allowed_types'] = 'jpg|jpeg|gif|bmp|webp|png';
            $config['upload_path'] = './uploads/';
            $config['encrypt_name'] = true;
            
 
            
            $this->load->library('upload',$config);
            
            if ($this->upload->do_upload('upload')) {
                $upload_data = $this->upload->data();

                //$data['cover_pic'] = $upload_data['file_name'];

                $save = array(
                    'pic'        => $upload_data['file_name'],
                    'title'      => $this->input->post('title', TRUE),
                    'category'   => $this->input->post('category', TRUE),
                    'content'    => $this->input->post('content', TRUE)
                );
                $query = $this->Upload_Model->store_data($save);
                if ($query) {
                    $this->load->view('home');
                } else {
                    echo "sorry requested failed.";
                }
                

            } else {
                    print_r($this->upload->display_errors());
            }
            
        }
    }


    //public function index(){
    //    $this->load->view('use');
    //}
    
    //public function upload_file(){
    //    $config['allowed_types'] = 'jpg|png';
    //    $config['upload_path'] = './uploads/';
    //    $this->load->library('upload',$config);
    //    if ($this->upload->do_upload('upload')) {
    //        print_r($this->upload->data());
    //    } else {
    //        print_r($this->upload->display_errors());
    //    }
    //    
    //}









}




?>