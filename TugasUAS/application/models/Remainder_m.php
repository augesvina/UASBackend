<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Remainder_m extends CI_Model
{

    public function getRemainder($id = null)
    {
        if ($id === null) {
            $query = $this->db->get('remainder');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('remainder', array('id_remainder' => $id));

            return $query->row();
        }
    }

    public function add()
    {
        print_r($_POST);



        $data = array(
            'id_remainder' => NULL,
            'judul' => $this->input->post('judul'),
            'Keterangan' => $this->input->post('keterangan'),
            'batas_waktu' => $this->input->post('batas_waktu'),
            
            
        );
        $this->db->insert('remainder', $data);
        return  $this->session->set_flashdata('success', 'Berhasil Disimpan');
    }

    public function update()
    {
        print_r($_POST);

        $id = $_POST['id_remainder'];


        $data = array(
            'id_remainder' => $id,
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'batas_waktu' => $this->input->post('batas_waktu'),
          

        );
        $this->db->update('remainder', $data, array('id_remainder' => $id));

        return $this->session->set_flashdata('success', 'Berhasil diupdate');
    }
    public function delete($id)
    {

        return $this->db->delete('remainder', array('id_remainder' => $id));
    }
}

                        
/* End of file Remainder_m.php */
