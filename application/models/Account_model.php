<?php
class Account_model extends CI_Model{

    // function get_adminaccount($userid){

    //     // $project = $this->db->get_where('admin', ['Id' => $userid ])->row();
    //     // return $project;
    //     // $this->db->select('*');
    //     // $this->db->from('admin');
    //     // $this->db->where('Id', $userid);
    //     // $query = $this->db->get()->row_array();;
    //     // return $query->row();
    //     $this->db->where('Id',$userid);
    //     $hasil = $this->db->get('admin');
    //     if($hasil->num_rows() >0){
    //         return  $hasil->row();
    //        }else{
    //         return false;
    //        }
    // }
 
    // USER SETTING 
    
    //AUTHORS/USERS
    function Author_list(){
        $this->db->select('* ,DATE_FORMAT(Date_created, "%Y-%m-%d %h:%i %p") as added_date');
        $this->db->from('accounts');
        $this->db->join('book', 'accounts.AID = book.AID','left');
        $this->db->where('Account_Status', 0 );
        $this->db->where('accounts.AID = book.AID');
        $this->db->group_by('accounts.AID');
        $hasil = $this->db->get();
        return $hasil->result();
    }
// SELECT * ,DATE_FORMAT(Date_created, "%Y-%m-%d %h:%i %p") AS added_date 
// FROM accounts LEFT JOIN book ON accounts.AID = book.AID  
// WHERE  ISNULL(book.AID) GROUP BY accounts.AID ; 



    function User_list(){
        
        $this->db->select('accounts.* ,DATE_FORMAT(Date_created, "%Y-%m-%d %h:%i %p") as added_date');
        $this->db->from('accounts');
        $this->db->join('book', 'accounts.AID = book.AID','left');
        // $this->db->is_null('book.AID');
        // $this->db->where('book.AID IS NULL',NULL,false);
        $this->db->where('book.AID IS NULL');
        $this->db->where('Account_Status', 0 );
        $this->db->group_by('accounts.AID');
        $hasil = $this->db->get();
        return $hasil->result();
    }

    function Wait_list(){
        $this->db->select('* ,DATE_FORMAT(DateTime, "%Y-%m-%d %h:%i %p") as added_date');
        $this->db->from('waitlist');
        $hasil = $this->db->get();
        return $hasil->result();
    }

    // $this->db->select('*');
    // $this->db->from('gift');
    // $this->db->join('accounts','accounts.AID = gift.AID');
    // $this->db->join('book','book.Book_ID = gift.Book_ID');
    // $this->db->join('book_chapter','gift.Chapter_ID = book_chapter.Chapter_ID');

//AUTHORS PROFILE//
    // function book($AID){
    //     // $this->db->join('book_chapter','book.Book_ID = book_chapter.Book_ID');
    //      $this->db->get_where('accounts', ['AID' => $AID ]);
    //     $hasil = $this->db->get();
    //     return $hasil->row();
    // }
    
    function gift_history_list($AID){
        $this->db->select('*');
        $this->db->from('gift');
        $this->db->join('accounts','accounts.AID = gift.AID');
        $this->db->join('book','book.Book_ID = gift.Book_ID');
        $this->db->join('book_chapter','gift.Chapter_ID = book_chapter.Chapter_ID');
        $this->db->get_where('accounts', ['AID' => $AID ]  );
        $hasil = $this->db->get();
        return $hasil->result();
    }


    function accounts($AID){
        $project1 = $this->db->get_where('accounts', ['AID' => $AID ])->row();
         return $project1;
    }

    function books($AID){
        $project1 = $this->db->get_where('book', ['AID' => $AID ])->result();
         return $project1;
    }

    function book_gift($AID){
        $project1 = $this->db->join('book','book.AID = accounts.AID')->join('book_chapter','book_chapter.Book_ID = book.Book_ID')->join('gift','gift.Chapter_ID = book_chapter.Chapter_ID')->get_where('accounts', ['gift.AID' => $AID ])->result();
        return $project1;
    }

    function book_giftwallet($AID){
        $project1 = $this->db->join('book','book.AID = accounts.AID')->join('gift_wallet','gift_wallet.Book_ID = book.Book_ID')->get_where('accounts', ['gift_wallet.AID' => $AID ])->result();
        return $project1;
    }
//AUTHORS PROFILE//







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