<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tsm extends CI_Controller{

     
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index()
	{
		$this->load->view('master');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function services()
	{
		$data['type'] =  $this->uri->segment(3);
		$this->load->view('service',$data);
	}

	public function career()
	{
		$this->load->view('career');
	}

	public function query()
	{
		
					$this->load->helper('date');
					$from_email = "no-reply@esporthub.co"; 
                    $to_email = "ankitvarshney1810@gmail.com"; 
                    $name = $this->input->post('name'); 
                    $email = $this->input->post('email');
                    $phone = $this->input->post('phone');
                    $company = $this->input->post('company');
					$message1 = $this->input->post('message');
					date_default_timezone_set('Asia/Kolkata');
					$datestring = date('d-M-Y h:ia');
                    $message = 	"
						<html>
						<head>
							<title>Query Message</title>
						</head>
						<body>
							<h2>Query for The Social Mantra</h2>
							<p>Client Information:</p>
							<p>Name of Client: $name</p>
							<p>Email Address: $email</p>
							<p>Contact Number: $phone</p>
							<p>Name of Company: $company</p>
							<p>Message: $message1</p>
							<p>Date: $datestring</p>
						</body>
						</html>
						";
              
                    
                    $this->load->library('email'); 
                    $this->email->from($from_email, 'Esporthub.co'); 
                    $this->email->to($to_email);
                    $this->email->subject('Account verification'); 
                    $this->email->message($message); 

                    //Send mail 
                    if($this->email->send()){
                        $this->load->view('thankyou');
                    }
                    else{
                        echo "nahi hua";
                    }
                  
                  
	}
}








?>