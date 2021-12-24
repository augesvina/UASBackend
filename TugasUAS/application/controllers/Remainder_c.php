<?php 
class Remainder_c extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Remainder_m');
        
        
    }
    public function index(){
        $data['remainder'] = $this->Remainder_m->getRemainder();
        
        $this->load->view('remainder/remainder', $data);
    }
    public function add(){

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('remainder/add');
            
        } else {

            $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            $this->Remainder_m->add();
            redirect('remainder_c');
        }
        
    }
    public function update($id = null){
        
        $array  = $this->Remainder_m->getRemainder($id);
        #Mengubah stdClass menjadi array;
        $data['remainder'] = json_decode(json_encode($array), true);
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run()) {
            $this->Remainder_m->update();
            
            redirect('remainder_c');
        } else {
            
            $this->load->view('remainder/update', $data);
        }
        
    }
    public function del($id)
    {

        $this->Remainder_m->delete($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        redirect('remainder');
    }
}

?>