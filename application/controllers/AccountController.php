<?php
class AccountController extends CI_Controller{
        private $userid;

    function __construct(){
        parent::__construct();
        $this->load->database();
        
			$this->load->library('session');
        $this->load->model('Account_model');
    }

    function AdminSetting(){
           $this->load->view('sidebar');
           $this->load->view('UserSetting/Admin-Settings');
    }

    //AUTHOR ROUTES
    function Author(){
        $this->load->view('sidebar');
        $this->load->view('UserSetting/Authors-List');
    }
    //AUTHOR-USER ROUTES

     //AUTHOR ROUTES
     function User(){
        $this->load->view('sidebar');
        $this->load->view('UserSetting/User-List');
    }
    //AUTHOR-USER ROUTES

    function WaitList(){
        $this->load->view('sidebar');
        $this->load->view('UserSetting/WaitList-Users');
    }

    //AUTHOR-USER VIEW
    function viewuseraccounts(){
        $data=$this->Account_model->User_list();
        echo json_encode($data);
    }

    function viewauthoraccounts(){
        $data=$this->Account_model->Author_list();
        echo json_encode($data);
    }

    function viewwaitlistaccounts(){
        $data=$this->Account_model->Wait_list();
        echo json_encode($data);
    }
    //AUTHOR-USER VIEW
  
    function update(){
        $data=$this->Account_model->update_author();
        echo json_encode($data);
    }   

    function reset(){
        $data=$this->Account_model->reset_author();
        echo json_encode($data);
    }

    function archieve(){
        $data=$this->Account_model->archieve_author();
        echo json_encode($data);
    }

    function banned(){
        $data=$this->Account_model->banned_author();
        echo json_encode($data);
    }

    function suspend(){
        $data=$this->Account_model->suspend_author();
        echo json_encode($data);
    }
 
    // USER SETTING


// REPORTS SETTING
//PERSONAL INFORMATION
    function index_Information(){
        $data=$this->Account_model->PesonalInfo();
        echo json_encode($data);
        $this->load->view('sidebar');
        $this->load->view('UserSetting/Personal-Information');
    }

     // show book
     public function book_dataget(){
        $data = $this->Account_model->fetch_book();
        echo json_encode($data);
         echo "<pre>";
        echo print_r ($data);
        
        $this->load->view('Reports/Book',$data);
    }

// REPORTS SETTING
//ADMIN SETTING


    function AdminSetting_data(){
        $data=$this->Account_model->AdminSetting();
        echo json_encode($data);
    }

    function update_admin(){
        $data=$this->Account_model->update_adminsetting();
        echo json_encode($data);
    }  

    function update_reset(){
        $data=$this->Account_model->reset_adminsetting();
        echo json_encode($data);
    }

    function update_archieve(){
        $data=$this->Account_model->archieve_adminsetting();
        echo json_encode($data);
    }


    public function viewprofile($AID)
    {
    $data = array();
    $data['accounts'] = $this->Account_model->accounts($AID);
    $data['gift'] = $this->Account_model->book_gift($AID);
    $data['gift_wallet'] = $this->Account_model->book_giftwallet($AID);
    $data['book'] = $this->Account_model->books($AID);
    $this->load->view('sidebar');       
    $this->load->view('UserSetting/Author-Profile',$data);     
    }





}