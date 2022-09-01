<?php
class PageController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('page_model');
    }
    function index(){
        $this->load->view('sidebar');
        $this->load->view('UserSetting/Account-Settings');
    }
 
    function product_data(){
        $data=$this->page_model->product_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->page_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->page_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->page_model->delete_product();
        echo json_encode($data);
    }
 
}