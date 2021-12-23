<?php 

class Transaksi_c extends CI_Controller {
    public function topup(){
        $this->load->view("dashboard/topup/topup");
    }
    public function cashout(){
        $this->load->view('dashboard/topup/cashout');
    }
}
?>