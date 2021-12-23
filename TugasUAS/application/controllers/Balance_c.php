<?php 
class Balance_c extends CI_Controller {
    public function index(){
        $this->load->view('balance/balance');

    }
    public function add(){
        $this->load->view('balance/add');
    }
}

?>