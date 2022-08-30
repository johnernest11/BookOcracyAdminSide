<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function Dashboard()
	{
		$this->load->view('Dashboard');
	}


	// Pages Route to Account-Settings 
    public function AccountSettings()
	{
		$this->load->model("main_model");  
		$data["fetch_data"] = $this->main_model->fetch_data();  
		//$this->load->view("main_view");  
		$this->load->view('sidebar');
		$this->load->view("UserSetting/Account-Settings", $data);  
		
		
	}

	public function AccountSettingsEdit()
	{
		$this->load->model("main_model");  
		$data["fetch_single_data"] = $this->main_model->fetch_single_data();  
		//$this->load->view("main_view");  
		$this->load->view('sidebar');
		$this->load->view("UserSetting/list", $data);  
		
		
	}
}
