<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Grafik_m extends CI_Model {
                        
    public function getPemasukkan()
    {
        $query = $this->db->get_where('Transaksi', array('jenis_transaksi' => "Pemasukkan"));
        return $query->result_array();
    }
    public function getPengeluaran()
    {
        $query = $this->db->get_where('Transaksi', array('jenis_transaksi' => "Pengeluaran"));
        return $query->result_array();
    }
    public function add()
    {


        $data = array(
            'id_transaksi' => NULL,
            'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
            'nilai' => $this->input->post('nilai'),
            'jenis_transaksi' => $this->input->post('jenis_transaksi'),
           
        );
        $this->db->insert('transaksi', $data);
        return  $this->session->set_flashdata('success', 'Berhasil Disimpan');
    }


                            
                        
}
                        
/* End of file Grafik_m.php */
    
                        