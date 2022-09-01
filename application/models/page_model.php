<?php
class page_model extends CI_Model{
 
    function product_list(){
        $hasil=$this->db->get('accounts');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'product_code'  => $this->input->post('product_code'), 
                'product_name'  => $this->input->post('product_name'), 
                'product_price' => $this->input->post('price'), 
            );
        $result=$this->db->insert('product',$data);
        return $result;
    }
 
    function update_product(){
        $account_id=$this->input->post('account_id');
        $account_name=$this->input->post('account_name');
        $account_email=$this->input->post('account_email');
 
        $this->db->set('Full_Name', $account_name);
        $this->db->set('Email', $account_email);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }
 
    function delete_product(){
        $account_id=$this->input->post('account_id');
        $this->db->where('AID', $account_id);
        $result=$this->db->delete('accounts');
        return $result;
    }
     
}