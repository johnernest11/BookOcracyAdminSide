<?php
use Google\Client as GoogleClient;
use Google\Service\Oauth2;
class AuthController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Users_model');
		$this->load->library('session');
		$this->load->model('Main_model');
		
	}
 
	public function index(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('Dashboard');
		}
		else{
			$this->load->view('login_form');
		}
	}

	// public function login(){
	// 	//load session library
	// 	$this->load->library('session');
 
	// 	$email = $_POST['email'];
	// 	$password = $_POST['password'];
 
	// 	$data = $this->Users_model->login($email, $password);
 
	// 	if($data){
	// 		$this->session->set_userdata('user', $data);
	// 		redirect('Dashboard');
	// 	}
	// 	else{
	// 		header('location:'.base_url().$this->index());
	// 		$this->session->set_flashdata('error','Invalid login. User not found');
	// 	} 
	// }
 
	public function login(){
		//load session library
		$this->load->library('session');
 
		$email = $_POST['email'];
		$password = $_POST['password'];
 
		$data = $this->Users_model->login($email);
 
		if($data){
			$this->session->set_userdata('user', $data);
			redirect('Dashboard');
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}
 
	public function Dashboard(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			//fetch  most reader books
			$data = array();
			$data['book'] = $this->Main_model->Most_Read_books();
			$data['author'] = $this->Main_model->Top_Authors();
			$data['vote'] = $this->Main_model->Top_voted();
			$data['year_list'] = $this->Main_model->fetch_year();
			
			

            $this->load->view('sidebar');       
            $this->load->view("Dashboard", $data); 
		}
		else{
			redirect('/');
		}
 
	}


	//REPORT CHART
	function fetch_data()
	{
			if($this->input->post('year'))
	{
	$chart_data = $this->Main_model->fetch_chart_data($this->input->post('year'));
	
	foreach($chart_data->result_array() as $row)
	{
		$output[] = array(
		'month'  => $row["account_month"],
		'amounts' => floatval($row["account_count"]),

		
		);
	}
	echo json_encode($output);
	}
	}
   //REPORT CHART


	public function Dashboardtable(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			//fetch  most reader books
			
			
			$data= $this->Main_model->New_Book();
			echo json_encode($data); 

		}
		else{
			redirect('/');
		}
 
	}
 
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
		redirect('/');
	}

}

