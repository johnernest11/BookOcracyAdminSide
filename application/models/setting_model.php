<?php
class setting_model extends CI_Model{

//Author-Users Accounts
    function historyAdmin_list(){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('Account_Status !=',0 );
        $hasil = $this->db->get();
        return $hasil->result();
    }

    function retrieve_author(){
        $account_id=$this->input->post('account_id');
        $account_status= $this->input->post('account_status');
        $this->db->set('Account_Status',$account_status);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }
    function delete_author(){
        $account_delete=$this->input->post('account_delete');
        $this->db->where('AID', $account_delete);
        $result=$this->db->delete('accounts');
        return $result;
    }

}
 