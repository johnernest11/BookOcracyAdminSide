<?php
class SettingController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('setting_model');
    }
// SETTING\

//BACK-UP HISTORY
// Admin-Account-Archieved
    function historyAdmin(){
        $this->load->view('sidebar');
        $this->load->view('Setting/Backup-History/Admin-Account-Archieved');
    }
 
    function historyAdmin_data(){
        $data=$this->setting_model->historyAdmin_list();
        echo json_encode($data);
    }
 
 
    function historyAdmin_update(){
        $data=$this->page_model->update_author();
        echo json_encode($data);
    }   


    function historyAdmin_retrieve(){
        $data=$this->page_model->archieve_author();
        echo json_encode($data);
    }
    // Admin-Account-Archieved





    // Authors-Users-Archieved
    function historyAuthors(){
        $this->load->view('sidebar');
        $this->load->view('Setting/Backup-History/Authors-Users-Archieved');
    }
 
    function historyAuthors_data(){
        $data=$this->page_model->Author_list();
        // echo "<pre>";
        // echo print_r ($data);

        echo json_encode($data);
    }
 
 
    function historyAuthors_update(){
        $data=$this->page_model->update_author();
        echo json_encode($data);
    }   

    

    function historyAuthors_retrieve(){
        $data=$this->setting_model->retrieve_author();
        echo json_encode($data);
    }

    function historyAuthors_delete(){
        $data=$this->setting_model->delete_author();
        echo json_encode($data);
    }
    // Admin-Account-Archieved
 
}
// USER SETTING
