<?php
class ReportController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Report_model');
    }

	public function index()
  {
    $data['book'] = $this->Report_model->get_all();
    $this->load->view('sidebar');       
    $this->load->view('Reports/Report',$data);
  }


  public function countauthor()
  {

	$data=$this->Report_model->count_authorbook();
	echo json_encode($data);
  }

  public function listbook()
  {

	$data=$this->Report_model->list_book();
	echo json_encode($data);
  }


   

}