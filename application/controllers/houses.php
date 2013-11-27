<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class houses extends CI_Controller {

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
    	$data['houses'] = $this->houses_model ->listhouses();
		$this->load->view('listing' ,$data);
	}
	

}

