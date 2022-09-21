<?php
class ReportController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Report_model');
    }

	public function index()
  {
	$data =array();
    $data['book'] = $this->Report_model->get_all();
	$data['accounts'] = $this->Report_model->count_authorbook();
    $this->load->view('sidebar');       
    $this->load->view('Reports/Report',$data);
  }

    public function TotalCredits(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			//fetch  most reader books
			$data = array();
			$data['book'] = $this->Report_model->Most_Read_books();
			$data['author'] = $this->Report_model->Top_Authors();
			$data['accounts'] = $this->Report_model->Numbers_of_Books();
            $this->load->view('sidebar');       
            $this->load->view("Reports/Report", $data);  
		}
		else{
			redirect('/');
		}
 
	}

}