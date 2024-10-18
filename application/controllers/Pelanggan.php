<?php
class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Kelola Pelanggan - Tenun Pringgasela';
        $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan();
        view_admin('pelanggan', 'index', $data);
    }

    public function hapus($id)
    {
        $this->db->where('userid', $id);
        $this->db->delete('Users');
        $this->session->set_flashdata('Pesan Hapus', 'Data Pelanggan Sudah Dihapus!');
        redirect('Pelanggan');
    }
}
