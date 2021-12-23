<?php 
class Remainder_c extends CI_Controller{
    public function index(){
        $this->load->view('remainder/remainder');
    }
    public function add(){
        $this->load->view('remainder/add');
    }
    public function update(){
        $this->load->view('remainder/update');
    }
}

?>