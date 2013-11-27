<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class about extends CI_Controller {

	public function index()
	{
        $this->load->library('session');
    
    if($this->session->userdata('logged_in') == "TRUE") {
    	$data['username'] = $this->session->userdata('username') ;
    }
    else{
    		$data['username'] = "" ;
    
    }

		$this->load->view('aboutus' ,$data) ;
    }
	
}