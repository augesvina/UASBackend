<?php 

class Dashboard_c extends CI_Controller {
    public function index(){
        $this->load->view("dashboard/dashboard");
    }
}
?>