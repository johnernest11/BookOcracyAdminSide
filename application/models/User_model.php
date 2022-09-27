<?php 
	class User_model extends CI_Model{
		public function getUser($email){
			return $this->db->where('email',$email)->get('admin')->row();
		}
		public function createUser($data){
			$this->db->insert('admin',$data);
		}
	}