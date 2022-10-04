<?php
 
 
class Book_model extends CI_Model{
  
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */
  




 
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
        
        $project = $this->db->get_where('book', ['BOOK_ID' => $id ])->row();
        return $project;
    }
    
        public function getchapter($id)
    {
        $project1 = $this->db->get_where('book_chapter', ['BOOK_ID' => $id ])->result();
        return $project1;
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



    function list_publishbook($AID){
        $project1 = $this->db->get_where('book', ['AID' => $AID ])->result();
        return $project1;
   }

   function book_Author($AID){
    $project1 = $this->db->get_where('accounts', ['AID' => $AID ])->row();
    return $project1;
}

}
?>