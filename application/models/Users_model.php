<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		// public function login($email, $password){
		// 	$query = $this->db->get_where('admin', array('Email'=>$email, 'Password'=>$password));
		// 	return $query->row_array();
		// }

		public function login($email){
			$query = $this->db->get_where('admin', array('Email'=>$email));
			return $query->row_array();
		}

		public function createUser($data){
			$this->db->insert('admin',$data);
		}

		
	}
?>