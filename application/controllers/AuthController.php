<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class AuthController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		
		$this->load->model('main_model');
		
	}
 
	public function index(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('Dashboard');
		}
		else{
			$this->load->view('Login');
		}
	}
 
	public function login(){
		//load session library
		$this->load->library('session');
 
		$email = $_POST['email'];
		$password = $_POST['password'];
 
		$data = $this->users_model->login($email, $password);
 
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
			$data['book'] = $this->main_model->Most_Read_books();
			$data['author'] = $this->main_model->Top_Authors();
            $this->load->view('sidebar');       
            $this->load->view("Dashboard", $data);  
		}
		else{
			redirect('/');
		}
 
	}
 
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}
 
}

