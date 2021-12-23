<?php 


class Belanja_c extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bukuproduk_m');
        $this->load->helper('matauang');
        
    }
    public function index()
    {


        $data['contents'] = $this->cart->contents();
        
        

        $this->load->view('produkbuku/belanja', $data);
    }
    
    public function belanja($data = null)
    {
       
        $databarang = $this->input->post();
        echo "<br>";
        
        
        $barang = array(
            'id'      => uniqid().$databarang['id_buku'],
            'qty'     => 1,
            'price'   => $databarang['harga_buku'],
            'name'    => $databarang['judul_buku'],
            'options' => array('gambar' => $databarang['gambar'], 'tanggal_dibuat' => $databarang['tanggal_dibuat'], 'penggarang_buku' => $databarang['penggarang_buku'])
            
            
        );
        
        print_r($barang);
        $this->cart->insert($barang);
        redirect(site_url('Bukuproduk_c/index'));
        
    }
    public function update(){
        $updates = $this->input->post();
        
        $data = array(
            'rowid' => $updates['rowid'],
            'qty'   => $updates['qty']
        );
        print_r($data);
    
        $this->cart->update($data);
        // redirect(site_url('Belanja_c/index'));
    }

    public function delete($rowid = NULL){
        $this->cart->remove($rowid);
        redirect(site_url('Belanja_c/index'));
    }
    
}
?>