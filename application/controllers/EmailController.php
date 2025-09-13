<?php
class EmailController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Email_model');
    }
// SETTING\

//BACK-UP HISTORY
// Admin-Account-Archieved
    function Emails(){
        $this->load->view('sidebar');
        $this->load->view('Email/Emails');
        
    }
 
    function email_data(){
        $data=$this->Email_model->email();
        echo json_encode($data);
    }
}
// USER SETTING

