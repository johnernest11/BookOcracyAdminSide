<?php
class ReportController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Report_model');
    }

	public function index()
  {
    $data['book'] = $this->Report_model->get_all();
    $data['year_list'] = $this->Report_model->fetch_year();
    $this->load->view('sidebar');       
    $this->load->view('Reports/Report',$data);
  }

  //REPORT CHART
  function fetch_data()
 {
  if($this->input->post('year'))
  {
   $chart_data = $this->Report_model->fetch_chart_data($this->input->post('year'));
   
   foreach($chart_data->result_array() as $row)
   {
    $output[] = array(
     'month'  => $row["month"],
     'amounts' => floatval($row["amounts"])
     
    );
   }
   echo json_encode($output);
  }
 }
//REPORT CHART


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