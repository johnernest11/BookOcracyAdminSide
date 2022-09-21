<?php
	class users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function login($email, $password){
			$query = $this->db->get_where('admin', array('Email'=>$email, 'Password'=>$password));
			return $query->row_array();
		}


		
	}
?>