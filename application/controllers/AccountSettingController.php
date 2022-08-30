<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountSettingsController extends CI_Controller {



	// Pages Route to Account-Settings 
    // public function Edit($id)
	// {
	// 	$this->load->model("AccountSettingModel");  
    //     $this->AccountSettingModel->getInfo($id);
	// 	// $data["fetch_data"] = $this->main_model->fetch_data();  
	// 	// //$this->load->view("main_view");  
	// 	// $this->load->view('sidebar');
	// 	// $this->load->view("UserSetting/Account-Settings", $data);  
		
		
	// }

    public function Edit(){  
        $user_id = $this->uri->segment(3); 
        $this->load->view('sidebar'); 
        $this->load->model("AccountSettingModel");  
        $data["user_data"] = $this->AccountSettingModel->fetch_single_data($user_id);  
        $data["fetch_data"] = $this->AccountSettingModel->fetch_data();  
        $this->load->view("UserSetting/Personal-Information", $data);  
   }  
}
