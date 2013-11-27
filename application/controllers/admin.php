<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class admin extends CI_Controller {
	public function __construct()
    {
    parent::__construct();
    $this->load->model('houses_model');
    }


	public function index()
	{
    	$data['success'] ="";
		$this->load->view('admin' ,$data);
	}
	public function login()

	{
	 $this->load->helper(array('form', 'url'));
     
	 $username = $this->input->post("adminusername");
	 $password  =$this->input->post("adminpassword");

	 if(($username == 'admin') &&($password = 'admin')) {
	 	 $this->load->view('add');
	 }
	 else{
	 	$data['success'] = "Login Failed try admin | admin" ;
						$this->load->view('admin' ,$data);	 	
	 }

	}

	public function addagent()
	{
		$data['success'] = "Agent Regiration successfull";
		 $this->load->helper(array('form', 'url'));
  		  $this->houses_model->addagent();
        $this->load->view('add' ,$data);
    
	

		}

	public function addhouse()
	{
		$data['success'] ="House Regiration successfull";
		 $this->load->helper(array('form', 'url'));
  		  $this->houses_model->addhouse();
        $this->load->view('add' ,$data);
    
	

		}
		

	
	


}

