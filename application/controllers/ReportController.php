<?php
class ReportController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('report_model');
    }
    public function TotalCredits(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			//fetch  most reader books
			$data = array();
			$data['book'] = $this->main_model->Most_Read_books();
			$data['author'] = $this->main_model->Top_Authors();
            $this->load->view('sidebar');       
            $this->load->view("Dashboard", $data);  
		}
		else{
			redirect('/');
		}
 
	}

}