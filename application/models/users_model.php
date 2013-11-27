<?php
class users_model extends CI_Model {
    private $username;
    public function __construct(){
    $this->load->database();     }

 
 

 
    public function get_user($username){
    $query = $this->db->query("select * from user where username = '".$username."'");
    return $query->result_array();}


   
    function registeruser() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $password = md5($password);
        $fullname = $this->input->post("fullname");
        $address = $this->input->post("address");
        $phonenumber =$this->input->post("phonenumber");
    
            $sql = "INSERT INTO user (username,phonenumber,password,fullname,address) "."VALUES (" . $this->db->escape($username) . ",".$this->db->escape($phonenumber) .",".$this->db->escape($password) 
                .",".$this->db->escape($fullname) .",".$this->db->escape($address) .")";
            $this->db->query($sql);

    }
    
    function logindetails() {
        $username = $this->input->post("user");
        $query = $this->db->query("select * from user where username = '".$username ."'");
                foreach ($query->result() as $row)
            {
            return $row->password;
            }
    }
    


}