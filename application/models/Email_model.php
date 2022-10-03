<?php
class Email_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }


   //AUTHORS/USERS
   function email(){
    $this->db->select('*');
    $this->db->from('accounts');
    $this->db->where('Account_Status', 0 );
    $hasil = $this->db->get();
    return $hasil->result();
}
}
 