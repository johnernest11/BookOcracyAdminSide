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

  // public function publishlistbook()
  // {

	// $data=$this->Report_model->list_publishbook();
	// echo json_encode($data);
  // }

  // public function unpublishlistbook()
  // {

	// $data=$this->Report_model->list_unpublishbook();
	// echo json_encode($data);
  // }


  public function sales_report()
  {

	$data=$this->Report_model->sales_report_data();
	echo json_encode($data);
  }


   

}