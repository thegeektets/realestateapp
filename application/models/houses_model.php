<?php
class houses_model extends CI_Model {
    
    public function __construct(){
    
    $this->load->database();     }
    private $username;

 
    
    function addhouse() {
        $houseid = $this->input->post("houseid");
        $location = $this->input->post("location");
        $cost = $this->input->post("cost");
        $rooms = $this->input->post("rooms");
        $size =$this->input->post("size");
      
            $sql = "INSERT INTO houses (houseid,lacation,cost,rooms,size) "."VALUES (" . $this->db->escape($houseid) . ",".$this->db->escape($lacation) .",".$this->db->escape($cost) 
                .",".$this->db->escape($rooms) .",".$this->db->escape($size) .")";
            $this->db->query($sql);

    }
    
    function addagent() {
        $agentid = $this->input->post("agentid");
        $surname = $this->input->post("surname");
        $firstname = $this->input->post("firstname");
        $client = $this->input->post("client");
        $phonenumber =$this->input->post("phonenumber");
    
            $sql = "INSERT INTO agents (agentid,phonenumber,surname,firstname,client)"." VALUES (" . $this->db->escape($agentid) . ",".$this->db->escape($phonenumber) .",".$this->db->escape($surname) 
                .",".$this->db->escape($firstname) .",".$this->db->escape($client) .")";
            $this->db->query($sql);

    }

     function pay($username) {
        $booked = $username;
        $houseid = $this->input->post("houseid");
        $amount = $this->input->post("amount");
        $method =$this->input->post("method");
    
            $sql = "UPDATE houses set booked = " . $this->db->escape($booked) . ",amount =".$this->db->escape($amount) .",method = " .
            $this->db->escape($method) 
               ." where houseid = ".$houseid;

            $this->db->query($sql);

    }
    function listhouses(){

         $sql = "select * from houses where booked IS NULL";
          $result = $this->db->query($sql);
           return $result->result_array();


    }
    


}