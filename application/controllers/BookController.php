<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BookController extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Book_model');
 
   }
 

  /*
    Edit a record page
  */
  public function edit($id)
  {
    $data = array();
    $data['book'] = $this->Book_model->get($id);
    $data['book_chapter'] = $this->Book_model->getchapter($id);
    $this->load->view('sidebar');       
    $this->load->view('Book',$data);     
  }


  public function update($id)
  {
    $this->form_validation->set_rules('Book_Title', 'Book_Title', 'required');
    $this->form_validation->set_rules('Book_Category', 'Book_Category', 'required');
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('Book/' . $id));
    }
    else
    {
       $this->book->update($id);
       $this->session->set_flashdata('success', "Updated Successfully!");
       redirect(base_url('Book/' . $id));
       return false;
    }
  }
 
}