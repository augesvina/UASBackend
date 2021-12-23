<?php 

class Grafik_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Grafik_m');
 
        
    }
    public function index(){
        
        $data['pemasukkan'] = $this->Grafik_m->getPemasukkan();
        $data['pengeluaran'] = $this->Grafik_m->getPengeluaran();

        

        
        $this->load->view('grafik/grafik', $data);
    }
}
?>