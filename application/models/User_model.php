<?php 
	class User_model extends CI_Model{
		public function getUser($email){
			
			$this->db->where('email',$email);
			$result = $this->db->get('admin');

			if ($result->num_rows() > 0) {
				return $result->result(); // fix
			}else{
				return false;
			}
		}
		public function createUser($data){
			$this->db->insert('admin',$data);
		}
	}