<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Balance_m extends CI_Model
{

    public function getBalanceinfo($id = null)
    {
        if ($id === null) {
            $query = $this->db->get('balance', 20);

            return $query->result_array();
        } else {
            $query = $this->db->get_where('balance', array('id_balance' => $id));

            return $query->row();
        }
    }
    public function getShowBalance()
    {
        $this->db->order_by('id_balance', 'DESC');
        $query = $this->db->get('balance', 1);
        return $query->result_array()[0];
    }

    public function add()
    {
        $this->db->order_by('id_balance DESC');
        $query = $this->db->get('balance', 1);
        $balance = $query->result_array()[0]['balance'];

        date_default_timezone_set('Asia/Jakarta');

        $date = date('d/m/Y h:i:s ', time());
        $this->db->order_by('id_balance DESC');
        $query = $this->db->get('balance', 1);
        $balance = $query->result_array()[0]['balance'] + $this->input->post('nominal');
        $keterangan = "Saldo Telah ditambahkan dari " . $this->input->post('jenis_bank') . " Sebesar" . $this->input->post('nominal') . "\n\n Keterangan : " . $this->input->post('keterangan');





        


        $data = array(
            'id_balance' => NULL,
            'balance' => $balance,
            'tanggal_balance' => $date,
            'keterangan' => $keterangan,
            'id_user' => "1",
            'jenis_bank' => $this->input->post('jenis_bank')
           

        );
        $this->db->insert('balance', $data);
        return  $this->session->set_flashdata('success', 'Berhasil Disimpan');
    }

    public function checkout($harga = NULL)
    {
        $this->db->order_by('id_balance DESC');
        $query = $this->db->get('balance', 1);
        $balance = $query->result_array()[0]['balance'];
        
        $keterangan = "Nominal Berkurang sebesar" . $balance-$harga;
        $balance = $balance-$harga;
        if ($balance-$harga < 0) {
            return redirect(site_url('Belanja_c'));
            # code...
        }
        
        date_default_timezone_set('Asia/Jakarta');

        $date = date('d/m/Y h:i:s ', time());


        
        $data = array(
            'id_balance' => NULL,
            'balance' => $balance,
            'tanggal_balance' => $date,
            'keterangan' => $keterangan,
            'id_user' => "1",
            'jenis_bank' => "Bank BNI"
           

        );
        $this->db->insert('balance', $data);
        redirect('Belanja_c/destroyCart');
        return  $this->session->set_flashdata('success', 'Berhasil Disimpan');
        
    }

  
    
}
                        
/* End of file Balance_m.php */
