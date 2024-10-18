<?php
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Kategori - Tenun Pringgasela';
        $data['kategori'] = $this->Kategori_model->get_kategori();
        view_admin('kategori', 'index', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Kategori - Tenun Pringgasela';
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $this->form_validation->set_rules('namakategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == false) {
            view_admin('kategori', 'tambah', $data);
        } else {
            $this->Kategori_model->tambah_kategori();
            $this->session->set_flashdata('Pesan', 'Data Kategori Berhasil Ditambahkan!');
            redirect('Kategori');
        }
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Kategori - Tenun Pringgasela';
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $data['kategori'] = $this->db->get_where('kategori', ['idkategori' => $id])->row_array();
        $this->form_validation->set_rules('namakategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == false) {
            view_admin('kategori', 'edit', $data);
        } else {
            $this->Kategori_model->edit($id);
            $this->session->set_flashdata('Pesan Edit', 'Data Kategori Berhasil Diubah!');
            redirect('Kategori');
        }
    }
    public function hapus($id)
    {
        $this->db->where('idkategori', $id);
        $this->db->delete('Kategori');
        $this->session->set_flashdata('Pesan Hapus', 'Data Kategori Sudah Dihapus!');
        redirect('Kategori');
    }
}
