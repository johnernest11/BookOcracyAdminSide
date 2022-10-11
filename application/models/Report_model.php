<?php
 
 
class Report_model extends CI_Model{
     
 
    public function __construct()
    {
        parent::__construct();
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
   
      

function sales_report_data(){
    $this->db->select('SUM(amount) as amounts');
    $this->db->from('transactions');
    $this->db->where('type = Payment ');
    $this->db->where('description = Book Upload ');
    $this->db->group_by('MONTH(created_at) as months ');
    $sales = $this->db->get();
    return $sales->result();
}
    //COUNT NUMBER OF BOOK BY AUTHOR

//REPORT GRAPH

    function fetch_year()
 {
    $this->db->select('YEAR(created_at) as year');
    $this->db->from('transactions');
    $this->db->group_by('year');
//   $this->db->select('year');
//   $this->db->from('chart_data');
//   $this->db->group_by('year');
//   $this->db->order_by('year', 'DESC');
  return $this->db->get();
 }

 function fetch_chart_data($year)
 {
//   $this->db->where('year', $year);
//   $this->db->order_by('year', 'ASC');
//   return $this->db->get('chart_data');
//   $this->db->select('Month(created_at) as month, amount');
$this->db->select('SUM(amount) as amounts, MONTHNAME(created_at) as month');
  $this->db->where('YEAR(created_at)', $year);
  $this->db->order_by('created_at', 'ASC');
  $this->db->group_by('month');
  $this->db->group_by('YEAR(created_at)');
  
  return $this->db->get('transactions');
 }//REPORT GRAPH
}
?>