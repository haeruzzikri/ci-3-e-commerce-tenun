<?php
class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Metode Pembayaran - Tenun Pringgasela';
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran();
        view_admin('pembayaran', 'index', $data);
    }
    public function tambah()
    { {
            $data['title'] = 'Tambah Metode - Tenun Pringgasela';
            $this->form_validation->set_rules('namametode', 'Nama Metode', 'required');
            $this->form_validation->set_rules('norek', 'Nomor Rekening/Nomor Tujuan', 'required');
            $this->form_validation->set_rules('urllogo', 'URL Logo', 'required');
            $this->form_validation->set_rules('an', 'Nama Rekening Tujuan', 'required');
            if ($this->form_validation->run() == false) {
                view_admin('pembayaran', 'tambah', $data);
            } else {
                $this->Pembayaran_model->tambah_metode();
                $this->session->set_flashdata('Pesan', 'Data Produk Berhasil Ditambahkan!');
                redirect('Pembayaran');
            }
        }
    }

    public function hapus($id)
    {
        $this->db->where('no', $id);
        $this->db->delete('Pembayaran');
        $this->session->set_flashdata('Pesan Hapus', 'Data Produk Sudah Dihapus!');
        redirect('Pembayaran');
    }
}
