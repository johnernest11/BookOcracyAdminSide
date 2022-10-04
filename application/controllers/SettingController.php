<?php
class SettingController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Setting_model');
    }
// SETTING\

//BACK-UP HISTORY
// Admin-Account-Archieved
    function historyAdmin(){
        $this->load->view('sidebar');
        $this->load->view('Setting/Backup-History/Admin-Account-Archieved');
    }
 
    function historyAdmin_data(){
        $data=$this->Setting_model->historyAdmin_list();
        echo json_encode($data);
    }
 
 
    function historyAdmin_update(){
        $data=$this->Page_model->update_author();
        echo json_encode($data);
    }   


    function historyAdmin_retrieve(){
        $data=$this->Page_model->archieve_author();
        echo json_encode($data);
    }
    // Admin-Account-Archieved





    // Authors-Users-Archieved
    function historyAuthors(){
        $this->load->view('sidebar');
        $this->load->view('Setting/Backup-History/Authors-Users-Archieved');
    }
 
    function historyAuthors_data(){
        $data=$this->Page_model->Author_list();
        // echo "<pre>";
        // echo print_r ($data);

        echo json_encode($data);
    }
 
 
    function historyAuthors_update(){
        $data=$this->Page_model->update_author();
        echo json_encode($data);
    }   

    

    function historyAuthors_retrieve(){
        $data=$this->Setting_model->retrieve_author();
        echo json_encode($data);
    }

    function historyAuthors_delete(){
        $data=$this->Setting_model->delete_author();
        echo json_encode($data);
    }
    // Admin-Account-Archieved



    function gift(){
        $this->load->view('sidebar');
        $this->load->view('Setting/Gift-History');
    }

    function  gift_history(){
        $data=$this->Setting_model->gift_history_list();
        echo json_encode($data);
    }
}
// USER SETTING

