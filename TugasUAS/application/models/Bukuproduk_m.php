<?php

class Bukuproduk_m extends CI_Model
{
    
    public function getBuku($id = null)
    {
        if ($id === null) {
            $query = $this->db->get('produkbuku');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('produkbuku', array('id_buku' => $id));

            return $query->row();
        }
    }

    public function add()
    {


        if ($this->upload->do_upload('foto_sampul')) {
            echo "if terjalankan";
            $data = $this->upload->data();

            $gambar = $data['file_name'];
            
        } else {
            echo "else terjalankan";
            $gambar = 'default.jpg';
        }


        $data = array(
            'id_buku' => NULL,
            'judul_buku' => $this->input->post('judul_buku'),
            'penggarang_buku' => $this->input->post('penggarang_buku'),
            'harga_buku' => $this->input->post('harga_buku'),
            'foto_sampul' => $gambar,
            'tanggal_dibuat' => $this->input->post('tanggal_dibuat')

        );
        $this->db->insert('produkbuku', $data);
        return  $this->session->set_flashdata('success', 'Berhasil Disimpan');
    }

    public function update()
    {

        $id = $_POST['id_buku'];

        if ($this->upload->do_upload('foto_sampul')) {
            echo "if terjalankan";
            $data = $this->upload->data();

            $gambar = $data['file_name'];
        } else {
            echo "else terjalankan";
            $gambar = 'default.jpg';
        }


        $data = array(
            'id_buku' => $id,
            'judul_buku' => $this->input->post('judul_buku'),
            'penggarang_buku' => $this->input->post('penggarang_buku'),
            'harga_buku' => $this->input->post('harga_buku'),
            'foto_sampul' => $gambar,
            'tanggal_dibuat' => $this->input->post('tanggal_dibuat')

        );
        $this->db->update('produkbuku', $data, array('id_buku' => $id));

        return $this->session->set_flashdata('success', 'Berhasil diupdate');
    }
    public function delete($id)
    {

        return $this->db->delete('produkbuku', array('id_buku' => $id));
    }
}
