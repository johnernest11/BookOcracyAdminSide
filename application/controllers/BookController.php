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
      Display all records in page
   */
  

 
  /*
 
    Display a record
  */
  // public function show($id)
  // {
  //   $data['project'] = $this->project->get($id);
  //   $data['title'] = "Show Project";
  //   $this->load->view('layout/header');
  //   $this->load->view('project/show', $data);
  //   $this->load->view('layout/footer'); 
  // }
 
  /*
    Create a record page
  */
  // public function create()
  // {
  //   $data['title'] = "Create Project";
  //   $this->load->view('layout/header');
  //   $this->load->view('project/create',$data);
  //   $this->load->view('layout/footer');     
  // }
 
  /*
    Save the submitted record
  */
  // public function store()
  // {
  //   $this->form_validation->set_rules('name', 'Name', 'required');
  //   $this->form_validation->set_rules('description', 'Description', 'required');
 
  //   if (!$this->form_validation->run())
  //   {
  //       $this->session->set_flashdata('errors', validation_errors());
  //       redirect(base_url('project/create'));
  //   }
  //   else
  //   {
  //      $this->project->store();
  //      $this->session->set_flashdata('success', "Saved Successfully!");
  //      redirect(base_url('project'));
  //   }
 
  // }
 
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
  

  
  // public function chapterview($id)
  // {
  //   $data['chapter_book'] = $this->book_model->get_chapterview($id);
  //   $this->load->view('Book',$data);    
  // }
 
  /*
    Update the submitted record
  */
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
 
  /*
    Delete a record
  */
  public function delete($id)
  {
    $item = $this->project->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('project'));
  }
 
 
}