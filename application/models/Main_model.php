<?php  
 class Main_model extends CI_Model  
 {  
  function __construct(){
    parent::__construct();
    $this->load->database();
}
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
      
          $this->db->select('SUM(R_Stat) AS A,book.*,book_chapter.* ');
          $this->db->from('book');
          $this->db->join('book_chapter','book.Book_ID = book_chapter.Book_ID');
          $this->db->join('chapter_view','chapter_view.Chapter_ID = book_chapter.Chapter_ID');
          $this->db->group_by("book.Book_Title");
          $this->db->order_by("chapter_view.R_Stat",'DESC');
          $this->db->Limit(1);
          $projects = $this->db->get()->result();
        return $projects;


        
      }
//fetch  top Author
function Top_Authors(){
     // SELECT book.Book_Title, 
     // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
     
     $this->db->select('accounts.Full_Name','SUM(vote.Vote_Value)  ');
     $this->db->from('accounts');
     $this->db->join('vote','accounts.AID = vote.AID');
     $this->db->group_by("vote.AID");
     $this->db->order_by("vote.Vote_Value",'DESC');
     $this->db->Limit(1);
     $projectsq = $this->db->get()->result();
   return $projectsq;
 }



 //fetch  top Author
function Top_voted(){
     // SELECT book.Book_Title, 
     // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
     // SELECT SUM(Vote_Value) AS Total,book.* FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID GROUP BY Book_ID
     $this->db->select('SUM(Vote_Value) AS Total,book.*');
     $this->db->from('book');
     $this->db->join('vote','book.Book_ID = vote.Book_ID');
     $this->db->group_by("vote.Book_ID");
     $this->db->order_by("vote.Book_ID",'DESC');
     $this->db->Limit(1);
     $projectsq = $this->db->get()->result();
   return $projectsq;
 }

  //fetch  top Author
function New_Book(){
     // SELECT book.Book_Title, 
     // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
     // SELECT SUM(Vote_Value) AS Total,book.* FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID GROUP BY Book_ID
     $this->db->select('* ,DATE_FORMAT(Date_Time, "%Y-%m-%d %h:%i %p") as added_date');
     $this->db->from('book');
     $this->db->join('accounts','book.AID = accounts.AID');
     $this->db->where('MONTH(Date_Time) = MONTH(NOW())');
     $this->db->where('Account_Status = 0');
     $this->db->where('Book_Status = 1');
     $this->db->order_by("Date_Time",'DESC');
     $this->db->Limit(5);
     $projectsq = $this->db->get()->result();
   return $projectsq;
 }
 } 