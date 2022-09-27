<?php
 
 
class Report_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 

    public function get_all(){
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('accounts','accounts.AID = book.AID');
        // $this->db->group_by('accounts.Full_Name');
        $this->db->where('accounts.Account_Status = 0 ');
        $this->db->where('book.Book_Status = 1 ');
        $transaction = $this->db->get();
        return $transaction->result();
        $projects = $this->db->get("book")->result();
        return $projects;
    }

     //COUNT NUMBER OF BOOK BY AUTHOR
    function count_authorbook(){
        $this->db->select('COUNT(book.AID) as num ,accounts.*');
        $this->db->from('accounts');
        $this->db->join('book', 'accounts.AID = book.AID','left');
        $this->db->where('Account_Status', 0 );
        $this->db->where('accounts.AID = book.AID');
        $this->db->group_by('book.AID');
        $Numbook = $this->db->get();
        return $Numbook->result();
    }
     //COUNT NUMBER OF BOOK BY AUTHOR
   
      //COUNT NUMBER OF BOOK BY AUTHOR
    function list_publishbook(){
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('accounts','accounts.AID = book.AID');
        $this->db->where('accounts.Account_Status = 0 ');
        $this->db->where('book.Book_Status = 1 ');
        $listbook = $this->db->get();
        return $listbook->result();
   }

   function list_unpublishbook(){
    $this->db->select('*');
    $this->db->from('book');
    $this->db->join('accounts','accounts.AID = book.AID');
    $this->db->where('accounts.Account_Status = 0 ');
    $this->db->where('book.Book_Status = 0 ');
    $listbook = $this->db->get();
    return $listbook->result();
}
    //COUNT NUMBER OF BOOK BY AUTHOR
  
}
?>