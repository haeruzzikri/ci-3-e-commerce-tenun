<?php
class Konfirmasi_model extends CI_Model
{
    public function update_konfirmasi($id)
    {
        $gambar = $_FILES['gambar'];
        $config['upload_path']          = FCPATH . '/assets/upload/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('Pesan', 'Daftar Tidak Terupload!');
            redirect('Produk/tambah');
        } else {
            $gambar = $this->upload->data('file_name');
        }
        $data = array(
            'tglbayar' => $this->input->post('tanggal'),
            'status' => 'Pembayaran Berhasil',
            'upload_pembayaran' =>  $gambar
        );
        
        $this->db->where('idkonfirmasi', $id);
        $this->db->update('konfirmasi', $data);
    
    }
}
