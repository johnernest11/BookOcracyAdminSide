<?php
class transaction_model extends CI_Model{

//TRANSACTION RECENT
    function transaction_recent(){
        $this->db->select('*');
        $this->db->from('transactions');
        $this->db->limit(5);
        $this->db->order_by('created_at', 'DESC');
        $transaction = $this->db->get();
        return $transaction->result();
    }



    function transaction_history(){
        $this->db->select('*');
        $this->db->from('transactions');
        $this->db->join('transaction_details','transaction_details.TID = transactions.TID');
        $transaction = $this->db->get();
        return $transaction->result();
    }

   

}
 