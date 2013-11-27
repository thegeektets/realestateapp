<?php
    class users extends CI_Controller{
    private $username;

    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
    }


  function index(){
   $this->load->library('session');
     $this->load->helper(array('form', 'url'));
   
    if($this->session->userdata('logged_in') == "TRUE") {
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    //  $data['stocks'] = $this->users_model->get_stocks($this->session->userdata('username'));
      $this->load->view('listing' , $data);
 
    }
    else{
      $data['success']=("") ;
  	  $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user', 'Username ', 'required'); 
      $this->form_validation->set_rules('pass', 'Password  ', 'required|alpha_numeric'); 
                      

    if ($this->form_validation->run() == FALSE){
 
            $this->load->view('index',$data);
    }
    else {
       $passw = $this->users_model->logindetails();
       if(md5($this->input->post("pass")) == $passw){
          $this->load->library('session');
          $newdata = array(
                'username'  => $this->input->post("user"),
                'logged_in' => TRUE
               );

        $this->session->set_userdata($newdata);
        $users = $this->session->all_userdata();
        $this->dashboard();
        }

    else{
       $data['success']= ("Login Failed !") ;
       $this->load->view('index' ,$data);
   
      }
        
      }
    }		
  }

  function logout(){
        $this->load->library('session');
        $newdata = array(
        'logged_in' => FALSE);

        $this->session->set_userdata($newdata);
         $this->load->view('index' ,$data);
   
      }
        
       
function register(){
     $this->load->helper(array('form', 'url'));
     $this->load->library('form_validation');

            $this->form_validation->set_rules('fullname', 'Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('address', 'Address', 'required'); 
            $this->form_validation->set_rules('phonenumber', 'phone', 'required|numeric'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required|alpha_numeric'); 
            $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required');
       
            

    if ($this->form_validation->run() == FALSE){
 
    $this->load->view('register');
    }
    else {
     $data['success']= ("Registration success") ;
     $this->users_model->registeruser();
     $this->load->view('index' ,$data);
      
    }
  }
  

 


}








