<?php
class Page_model extends CI_Model{
 
    // USER SETTING 
    
    //AUTHORS/USERS
    function Author_list(){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('Account_Status', 0 );
        $hasil = $this->db->get();
        return $hasil->result();
    }
    function update_author(){
        $account_id=$this->input->post('account_id');
        // $account_photo=$this->input->post('account_photo');
        $account_fullname=$this->input->post('account_fullname');
        $account_username=$this->input->post('account_username');
        $account_phone=$this->input->post('account_phone');
        $account_birth=$this->input->post('account_birth');
        $account_credits=$this->input->post('account_credits');
        $account_votes=$this->input->post('account_votes');
        $account_email=$this->input->post('account_email');
 
        $this->db->set('Full_Name', $account_fullname);
        $this->db->set('Username', $account_username);
        $this->db->set('Phone_Number', $account_phone);
        $this->db->set('Birth_Date', $account_birth);
        $this->db->set('Credits', $account_credits);
        $this->db->set('Votes_Credit', $account_votes);
        $this->db->set('Email', $account_email);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }
    function reset_author(){
        $account_id=$this->input->post('account_id');
        $account_password= password_hash($this->input->post('account_password'), PASSWORD_DEFAULT);
        $this->db->set('Password',$account_password);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }
    function archieve_author(){
        $account_id=$this->input->post('account_id');
        $account_archieve= $this->input->post('account_archieve');
        $this->db->set('Archieve_Data',$account_archieve);
        $this->db->where('AID', $account_archieve);
        $result=$this->db->update('accounts');
        return $result;
    }


    function banned_author(){
        $account_id=$this->input->post('account_id');
        $account_status=$this->input->post('account_status');
        $this->db->set('Account_Status', $account_status);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }


    function suspend_author(){
        $account_id=$this->input->post('account_id');
        $account_suspend=$this->input->post('account_suspend');
        $account_status=$this->input->post('account_status');
        $this->db->set('Account_Status', $account_status);
        $this->db->set('Account_SuspendDay', $account_suspend);
        $this->db->where('AID', $account_id);
        $result=$this->db->update('accounts');
        return $result;
    }
    // function delete_author(){
    //     $account_id=$this->input->post('account_id');
    //     $this->db->where('AID', $account_id);
    //     $result=$this->db->delete('accounts');
    //     return $result;
    // }

 // USER SETTING AUTHORS/USERS
  // REPORT LIST OF BOOKS
  function PesonalInfo(){
    $this->load->library('session');
    $this->session->userdata('user');
    $personinfo=$this->db->get('admin');
    return $personinfo->result();
    }
    function book_status_update(){
        $book_id=$this->input->post('book_id');
        $book_status=$this->input->post('book_status');
 
        $this->db->set('Book_Status', $book_status);
        $this->db->where('Book_ID', $book_id);
        $result=$this->db->update('book');
        return $result;
    }

    function book_status_get(){
        $book_id=$this->input->get('book_id');
        $book_status=$this->input->get('book_status');
 
    }


    public function fetch_book($account_id)
{
   $this->db->select('bookocracy');
   $this->db->from('book');
   $this->db->where('Book_ID',$account_id);
   $res=$this->db->get();
   return $res->result();
}












 //ADMIN-SETTING
 function AdminSetting(){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('Archieve_Data','0' );
    $hasil = $this->db->get();
    return $hasil->result();
}
function update_adminsetting(){
    $account_id=$this->input->post('account_id');
    // $account_photo=$this->input->post('account_photo');
    $account_fullname=$this->input->post('account_fullname');
    $account_username=$this->input->post('account_username');
    $account_phone=$this->input->post('account_phone');
    $account_birth=$this->input->post('account_birth');
    $account_email=$this->input->post('account_email');

    $this->db->set('Full_Name', $account_fullname);
    $this->db->set('Username', $account_username);
    $this->db->set('Phone_Number', $account_phone);
    $this->db->set('Birth_Date', $account_birth);
    $this->db->set('Email', $account_email);
    $this->db->where('Id', $account_id);
    $result=$this->db->update('admin');
    return $result;
}

function reset_adminsetting(){
    $account_id=$this->input->post('account_id');
    $account_password= password_hash($this->input->post('account_password'), PASSWORD_DEFAULT);
    $this->db->set('Password',$account_password);
    $this->db->where('Id', $account_id);
    $result=$this->db->update('admin');
    return $result;
}
function archieve_adminsetting(){
    $account_id_archieve=$this->input->post('account_id_archieve');
    $account_archieve= $this->input->post('account_archieve');
    $this->db->set('Archieve_Data',$account_archieve);
    $this->db->where('Id', $account_id_archieve);
    $result=$this->db->update('admin');
    return $result;
}


}