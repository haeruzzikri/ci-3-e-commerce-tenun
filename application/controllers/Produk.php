<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Produk - Tenun Pringgasela';
        $data['produk'] = $this->Produk_model->get_produk();
        view_admin('produk', 'index', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Tambah - Tenun Pringgasela';
        $data['kategori'] = $this->Produk_model->get_kategori();
        $this->form_validation->set_rules('namaproduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('rate', 'Rating', 'required');
        $this->form_validation->set_rules('hargasebelumdiskon', 'Harga Sebelum Diskon', 'required');
        if ($this->form_validation->run() == false) {
            view_admin('produk', 'tambah', $data);
        } else {
            $this->Produk_model->tambah_produk();
            $this->session->set_flashdata('Pesan', 'Data Produk Berhasil Ditambahkan!');
            redirect('Produk');
        }
    }
    public function hapus($id)
    {
        $this->db->where('idproduk', $id);
        $this->db->delete('Produk');
        $this->session->set_flashdata('Pesan Hapus', 'Data Produk Sudah Dihapus!');
        redirect('Produk');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit - Tenun Pringgasela';
        $data['produk'] = $this->db->get_where('produk', ['idproduk' => $id])->row_array();
        $data['kategori'] = $this->Produk_model->get_kategori();
        $this->form_validation->set_rules('namaproduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('rate', 'Rating', 'required');
        $this->form_validation->set_rules('hargasebelumdiskon', 'Harga Sebelum Diskon', 'required');
        if ($this->form_validation->run() == false) {
            view_admin('produk', 'edit', $data);
        } else {
            $this->Produk_model->edit($id);
            $this->session->set_flashdata('Pesan Edit', 'Data Produk Berhasil Diubah!');
            redirect('Produk');
        }
    }
}
