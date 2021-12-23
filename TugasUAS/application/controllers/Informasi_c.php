<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('informasi_m');

    }

    // List all your items
    public function index( $offset = 0 )
    {
        $data['informasi'] = $this->informasi_m->getAll();
        
        $this->load->view('informasi/listinformasi', $data);
        

    }
    public function input()
    {
        $this->load->view('informasi/informasi');
    }

    // Add a new item
    public function add()
    {
        // Configurasi File
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->upload->initialize($config);
        $this->informasi_m->add();
        redirect('informasi_c/index');


    }

    //Update one item
    public function update( $id = NULL )
    {


        $this->form_validation->set_rules('judul', 'Judul Buku', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        $data['inform']  = $this->informasi_m->getAll($id);
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
            $this->informasi_m->update();
            
            redirect('informasi_c/index');
        }
        $this->load->view('informasi/updateinfo', $data);

    }

    //Delete one item
    public function delete( $id = NULL )
    {
        
        $this->informasi_m->delete($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        redirect('informasi_c/index');

    }
}

/* End of file Controllername.php */
