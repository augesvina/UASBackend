<?php
class Balance_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Balance_m');
        $this->load->helper('matauang');
        $this->load->helper('rupiah');
    }
    public function index()
    {

        $data['list'] = $this->Balance_m->getBalanceinfo();
        $data['uang'] = $this->Balance_m->getShowBalance();

        $this->load->view('balance/balance', $data);
    }
    public function add()
    {
        print_r($_POST);
       
        $this->form_validation->set_rules('nominal', 'Jumlah Uang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');



        if ($this->form_validation->run() === FALSE) {
            $this->load->view('balance/add');
           
        } else {

            $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            $this->Balance_m->add();
            
            redirect('Balance_c/index');
        }
    }
    public function checkout($harga = NULL)
    {
        
        $this->session->set_flashdata('success', 'Berhasil Membeli');
        $this->Balance_m->checkout($harga);
        
            
    
    }
    
  
}
