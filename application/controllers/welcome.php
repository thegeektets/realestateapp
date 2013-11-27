<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Welcome extends CI_Controller {

	public function index()
	{
    	$data['username'] ="Please Login";
		$this->load->view('index' ,$data);
	}

}

