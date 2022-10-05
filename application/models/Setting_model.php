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


    
    //fetch  top Author
    function vote_history_list(){
        // SELECT book.Book_Title, 
        // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
        // SELECT SUM(Vote_Value) AS Total,book.* FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID GROUP BY Book_ID
        $this->db->select('* ,DATE_FORMAT(Vote_Date, "%Y-%m-%d %h:%i %p") as vote_date');
        $this->db->from('book');
        $this->db->join('vote','book.Book_ID = vote.Book_ID');
        $this->db->join('accounts','book.AID = accounts.AID');
        $this->db->order_by("vote.Book_ID",'DESC');
        $projectsq = $this->db->get()->result();
    return $projectsq;
    }
}
 