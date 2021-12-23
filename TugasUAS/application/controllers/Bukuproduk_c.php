<?php


class Bukuproduk_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bukuproduk_m');
        $this->load->helper('matauang');
        $this->load->helper('rupiah');
        
    }
    public function index()
    {


        $data['produk'] = $this->Bukuproduk_m->getBuku();
        

        $this->load->view('produkbuku/list', $data);
    }
    public function add()
    {

        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('penggarang_buku', 'Penggarang buku', 'required');


        // Configurasi File
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->upload->initialize($config);


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('produkbuku/create');
        } else {

            $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            $this->Bukuproduk_m->add();
            redirect('Bukuproduk_c/index');
        }
    }
    public function edit($id = null)
    {
        $array  = $this->Bukuproduk_m->getBuku($id);
        #Mengubah stdClass menjadi array;
        $data['buku'] = json_decode(json_encode($array), true);
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('penggarang_buku', 'Penggarang buku', 'required');

        // Mengatur configurasi
        // Configurasi File
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->upload->initialize($config);


        if ($this->form_validation->run()) {
            $this->Bukuproduk_m->update();
            
            redirect('Bukuproduk_c/index');
        }
        $this->load->view('produkbuku/update', $data);
    }
    public function del($id)
    {
        print_r($id);
        $this->Bukuproduk_m->delete($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        redirect('Bukuproduk_c/index');
    }
}
