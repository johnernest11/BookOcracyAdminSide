<?php
class TransactionController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('transaction_model');
    }
// SETTING\

//BACK-UP HISTORY
// Admin-Account-Archieved
    function transaction(){
        $this->load->view('sidebar');
        $this->load->view('Transaction/Transaction');
    }
 
    function transaction_recent_data(){
        $data=$this->transaction_model->transaction_recent();
        echo json_encode($data);
    }

    function transaction_history_data(){
        $data=$this->transaction_model->transaction_history();
        echo json_encode($data);
    }
 
 
 
}
// USER SETTING

