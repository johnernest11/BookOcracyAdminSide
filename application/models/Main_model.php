<?php  
 class Main_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      public function createData($data)
	{
		$query = $this->db->insert('person',$data);
		return $query;
	}
//fetch  most reader books
     function Most_Read_books(){
          // SELECT book.Book_Title, 
          // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
          
          $this->db->select('book.Book_Title','SUM(vote.Vote_Value) ');
          $this->db->from('book');
          $this->db->join('vote','book.Book_ID = vote.Book_ID');
          $this->db->group_by("vote.Book_ID");
          $this->db->order_by("vote.Vote_Value",'DESC');
          $this->db->Limit(1);
          $projects = $this->db->get()->result();
        return $projects;


        
      }
//fetch  top Author
function Top_Authors(){
     // SELECT book.Book_Title, 
     // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
     
     $this->db->select('accounts.Full_Name','SUM(vote.Vote_Value) ');
     $this->db->from('accounts');
     $this->db->join('vote','accounts.AID = vote.AID');
     $this->db->group_by("vote.AID");
     $this->db->order_by("vote.Vote_Value",'DESC');
     $this->db->Limit(1);
     $projectsq = $this->db->get()->result();
   return $projectsq;
 }


     //  
      function delete_data($id){  
           $this->db->where("AID", $id);  
           $this->db->delete("accounts");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  
      function fetch_single_data($id)  
      {  
           $this->db->where("AID", $id);  
           $query = $this->db->get("accounts");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
      function update_data($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("tbl_user", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
      }  
 } 
