<?php 
	use Google\Client as GoogleClient;
	use Google\Service\Oauth2;
	class Home extends CI_Controller{
		
		public function __construct()
		{	
			parent::__construct();
			$this->load->database();
			$this->load->model('user_model');
			$this->load->helper('url');
			$this->load->library('session');
		}

		// public function index(){
		// 	$this->load->view('login_form');
		// }

		// public function login(){
		// 	$email = $this->input->post('email');
		// 	$password = $this->input->post('password');

		// 	if($user = $this->user_model->getUser($email)){
		// 		if($password == $user->password){
		// 			$this->session->set_userdata('user',$user);
		// 			redirect('Dashboard');
		// 		}else{
		// 			$this->load->view('login_form',array('message'=>'Invalid Login Credentials!'));
		// 		}
				
		// 	}else{
		// 		$this->load->view('login_form',array('message'=>'No account exists!'));
		// 	}
		// }

		// public function dashboard(){
		// 	if($this->session->has_userdata('user')){
		// 		$user = $this->session->userdata('user');
		// 		$this->load->view('home',array('user'=>$user));
		// 	}else{
		// 		redirect('home');
		// 	}
			
		// }
		// public function logout(){
		// 	$this->session->sess_destroy();
		// 	redirect('home');
		// }

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
                
                $this->load->view('sidebar');       
                $this->load->view("Dashboard", $data); 
            }
            else{
                redirect('/');
            }
        }

		public function google_login(){
            $this->load->library('session');
			$client = new GoogleClient();
			$client->setApplicationName('bookocracy-admin');
            $client->setClientId('667863586490-0drh95kj0quvafm5o4v8p8tihv3fcnhv.apps.googleusercontent.com');
            $client->setClientSecret('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');
            $client->setRedirectUri('https://admin.bookocracy.com/home/google_login');
            $client->addScope(['https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile']);
			if($code = $this->input->get('code')){
				$token = $client->fetchAccessTokenWithAuthCode($code);
				$client->setAccessToken($token);
				$oauth = new Oauth2($client);
				
				$user_info = $oauth->userinfo->get();
				$data['Full_Name'] = $user_info->name;
                $data['Username'] = $user_info->given_name;
                $data['Phone_Number'] = $user_info->phonenumber;
				$data['Email'] = $user_info->email;
                $data['Picture'] = $user_info->picture;
                $data['Password'] = $user_info->at_hash;
				
				if($user = $this->user_model->getUser($user_info->email)){
					$this->session->set_userdata('user',$user);
                    redirect('Dashboard');
				}else{
					$this->user_model->createUser($data);
					
                    redirect('Dashboard');
				}
			}else{
				$url = $client->createAuthUrl();
				header('Location:'.filter_var($url,FILTER_SANITIZE_URL));
			}
		}
	}
