<?php
class Transaction_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }


    //TRANSACTION RECENT
    function transaction_recent(){
        $this->db->select('* ,DATE_FORMAT(created_at, "%Y-%m-%d %h:%i %p") as added_date');
        $this->db->from('transaction_details');
        $this->db->join('transactions','transaction_details.TID = transactions.TID');
        $this->db->limit(5);
        $this->db->order_by('added_date', 'DESC');
        $transaction = $this->db->get();
        return $transaction->result();
    }

    //TRANSACTION HISTORY
    function transaction_history(){
        $this->db->select('* ,DATE_FORMAT(created_at, "%Y-%m-%d %h:%i %p") as added_date');
        $this->db->from('transaction_details');
        $this->db->join('transactions','transaction_details.TID = transactions.TID');
        $this->db->order_by('added_date', 'DESC');
        $transaction = $this->db->get();
        return $transaction->result();
    }
}
 