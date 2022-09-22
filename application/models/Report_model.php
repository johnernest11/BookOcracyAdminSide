<?php
 
 
class Report_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('accounts','accounts.AID = book.AID');
        // $this->db->group_by('accounts.Full_Name');
        $this->db->where('accounts.Account_Status = 0 ');
        $transaction = $this->db->get();
        return $transaction->result();
        $projects = $this->db->get("book")->result();
        return $projects;
    }


    public function count_authorbook()
    {
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('accounts','accounts.AID = book.AID');
        $this->db->group_by('book.AID');
        $this->db->where('accounts.Account_Status = 0 ');
        $transaction = $this->db->get();
        return $transaction->result();
        $projects = $this->db->get("accounts")->result();
        return $projects;
    }


   
 
    /*
        Store the record in the database
    */
    public function store()
    {    
        $data = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description')
        ];
 
        $result = $this->db->insert('projects', $data);
        return $result;
    }
 
    /*
        Get an specific record from the database
    */
    public function get($id)
    {
        $project = $this->db->get_where('book', ['BOOK_ID' => $id ])->result();
        return $project;
    }
 
 
    /*
        Update or Modify a record in the database
    */
    public function update($id) 
    {
        $data = [
            'Book_Title'    => $this->input->post('Book_Title'),
            'Book_Category' => $this->input->post('Book_Category'),
            'Book_Tag' => $this->input->post('Book_Tag'),
            'Book_Description' => $this->input->post('Book_Description'),
        ];
 
        $result = $this->db->where('Book_ID',$id)->update('book',$data);
        return $result;
                 
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('projects', array('id' => $id));
        return $result;
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



function Numbers_of_Books(){
    // SELECT book.Book_Title, 
    // SUM(vote.Vote_Value) AS Avalue FROM book INNER JOIN vote ON book.Book_ID = vote.Book_ID  GROUP BY vote.Book_ID ORDER BY Avalue DESC LIMIT 1;
    
    $this->db->select('COUNT(books.Book_Title) ');
    $this->db->from('book');
    $this->db->join('accounts','accounts.AID = book.AID');
    $this->db->group_by("accounts.Full_Name");
    $projectsq = $this->db->get()->result();
  return $projectsq;
 }
     
}
?>