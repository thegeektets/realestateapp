<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class payments extends CI_Controller {
	private $username;
	



    public function __construct()
    {
    parent::__construct();
    $this->load->model('houses_model');
    }
	
	public function index()
	{
		   $this->load->library('session');
    
    if($this->session->userdata('logged_in') == "TRUE") {
    	$data['username'] = $this->session->userdata('username') ;
    }
    else{
    		$data['username'] = "" ;
    
    }
    	$data ['success'] ="";
		$this->load->view('payments' ,$data);
	}
	public function pay()
	{
		   $this->load->library('session');
    
    if($this->session->userdata('logged_in') == "TRUE") {
    	$data['username'] = $this->session->userdata('username') ;
    }
    else{
    		$data['username'] = "" ;
    
    }
	 $this->load->library('session');
                 if($this->session->userdata('logged_in') == "TRUE") {
                 	$username = $this->session->userdata('username') ;
                $this->houses_model->pay($username);
        $data ['success'] ="Payment Transaction Complete";
		$this->load->view('payments' ,$data);
	}
	else{
		$data ['success'] ="Please Login to proceed" ;
		$this->load->view('payments' ,$data);
	}
	}


}

