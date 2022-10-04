<?php
class Setting_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }


//Author-Users Accounts
    function historyAdmin_list(){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('Account_Status !=',0 );
        $hasil = $this->db->get();
        return $hasil->result();
    }

    function retrieve_author(){
        $account_id=$this->input->post('account_id');
        $account_status= $this->input->post('account_status');
        $this->db->set('Account_Status',$account_status);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }
    function delete_author(){
        $account_delete=$this->input->post('account_delete');
        $this->db->where('AID', $account_delete);
        $result=$this->db->delete('accounts');
        return $result;
    }




    function gift_history_list(){
        $this->db->select('*');
        $this->db->from('gift');
        $this->db->join('accounts','accounts.AID = gift.AID');
        $this->db->join('book','book.Book_ID = gift.Book_ID');
        $this->db->join('book_chapter','gift.Chapter_ID = book_chapter.Chapter_ID');
        $hasil = $this->db->get();
        return $hasil->result();
    }

}
 