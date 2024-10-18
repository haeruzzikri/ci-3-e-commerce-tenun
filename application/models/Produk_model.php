<?php
class Produk_model extends CI_Model
{
    public function get_produk()
    {
        return $this->db->get('detail_produk')->result_array();
    }
    public function get_kategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function tambah_produk()
    {
        $gambar = $_FILES['gambar'];
        $config['upload_path']          = FCPATH . '/assets/produk/';
        $config['allowed_types']        = 'jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('Pesan', 'Daftar Tidak Terupload!');
            redirect('Produk/tambah');
        } else {
            $gambar_produk = $this->upload->data('file_name');
        }
        $data = array(
            'idkategori' => $this->input->post('idkategori'),
            'namaproduk' => $this->input->post('namaproduk', true),
            'gambar' => $gambar_produk,
            'deskripsi' => $this->input->post('deskripsi', true),
            'rate' => $this->input->post('rate', true),
            'hargabefore' => $this->input->post('hargasebelumdiskon', true),
            'hargaafter' => $this->input->post('hargasesudahdiskon', true)
        );
        $this->db->insert('produk', $data);
    }

    public function edit($id)
    {
        $gambar = $_FILES['gambar'];
        $config['upload_path']          = FCPATH . '/assets/produk/';
        $config['allowed_types']        = 'jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $gambar_lama = $this->input->post('gambarlama');
            $data = array(
                'idkategori' => $this->input->post('idkategori'),
                'namaproduk' => $this->input->post('namaproduk', true),
                'gambar' => $gambar_lama,
                'deskripsi' => $this->input->post('deskripsi', true),
                'rate' => $this->input->post('rate', true),
                'hargabefore' => $this->input->post('hargasebelumdiskon', true),
                'hargaafter' => $this->input->post('hargasesudahdiskon', true)
            );

            $this->db->where('idproduk', $id);
            $this->db->update('produk', $data);
        } else {
            $gambar_produk = $this->upload->data('file_name');
            $data = array(
                'idkategori' => $this->input->post('idkategori'),
                'namaproduk' => $this->input->post('namaproduk', true),
                'gambar' => $gambar_produk,
                'deskripsi' => $this->input->post('deskripsi', true),
                'rate' => $this->input->post('rate', true),
                'hargabefore' => $this->input->post('hargasebelumdiskon', true),
                'hargaafter' => $this->input->post('hargasesudahdiskon', true)
            );
            $gambar_lama = $this->input->post('gambarlama');
            unlink(FCPATH . 'assets/produk/' . $gambar_lama);

            $this->db->where('idproduk', $id);
            $this->db->update('produk', $data);
        }
    }
}
