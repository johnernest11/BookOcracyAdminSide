<?php
class PageController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Page_model');
    }
// USER SETTING\

//Author-Users
    function index(){
        $this->load->view('sidebar');
        $this->load->view('UserSetting/Authors-Users');
    }
 
    function product_data(){
        $data=$this->Page_model->Author_list();
        // echo "<pre>";
        // echo print_r ($data);

        echo json_encode($data);
    }
 
  
 
    function update(){
        $data=$this->Page_model->update_author();
        echo json_encode($data);
    }   

    function reset(){
        $data=$this->Page_model->reset_author();
        echo json_encode($data);
    }


    function archieve(){
        $data=$this->Page_model->archieve_author();
        echo json_encode($data);
    }


    function banned(){
        $data=$this->Page_model->banned_author();
        echo json_encode($data);
    }

    function suspend(){
        $data=$this->Page_model->suspend_author();
        echo json_encode($data);
    }
 
// USER SETTING


// REPORTS SETTING
//PERSONAL INFORMATION
    function index_Information(){
        $data=$this->Page_model->PesonalInfo();
        echo json_encode($data);
        $this->load->view('sidebar');
        $this->load->view('UserSetting/Personal-Information');
    }

     // show single user
     public function book_dataget(){
        $data = $this->Page_model->fetch_book();
        echo json_encode($data);
         echo "<pre>";
        echo print_r ($data);
        
        $this->load->view('Reports/Book',$data);
    }
    // function book_dataget(){
    //     $this->load->view('sidebar');
    //     $this->load->view('Reports/Book');
    // }

//     public function book_dataget($account_id)
// {
//     $data['res']=$this->page_model->fetch_book($account_id);
//     echo json_encode($data);
//     $this->load->view('sidebar');
//     $this->load->view('Reports/Book');
// }

// REPORTS SETTING
//ADMIN SETTING
function index_Admin(){
    $this->load->view('sidebar');
    $this->load->view('UserSetting/Admin-Setting');
}

function AdminSetting_data(){
    $data=$this->Page_model->AdminSetting();
    // echo "<pre>";
    // echo print_r ($data);

    echo json_encode($data);
}

function update_admin(){
    $data=$this->Page_model->update_adminsetting();
    echo json_encode($data);
}  

function update_reset(){
    $data=$this->Page_model->reset_adminsetting();
    echo json_encode($data);
}


function update_archieve(){
    $data=$this->Page_model->archieve_adminsetting();
    echo json_encode($data);
}

}