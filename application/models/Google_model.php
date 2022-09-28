<?php 
	class Google_model extends CI_Model{
		public function getUser($email){
			return $this->db->where('Email',$email)->get('admin')->row();
		}
		public function createUser($data){
			$this->db->insert('admin',$data);
		}
	}