<?php
class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Staff_model');
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Kelola Staff - Tenun Pringgasela';
        $data['staff'] = $this->Staff_model->get_staff();
        view_admin('staff', 'index', $data);
    }

    public function tambah()
    { {
            $data['title'] = 'Tambah Staff - Tenun Pringgasela';
            $this->form_validation->set_rules('namastaff', 'Nama Staff', 'required');
            $this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required', 'Email');
            if ($this->form_validation->run() == false) {
                view_admin('staff', 'tambah', $data);
            } else {
                $this->Staff_model->tambah_staff();
                $this->session->set_flashdata('Pesan', 'Data Staff Berhasil Ditambahkan!');
                redirect('Staff');
            }
        }
    }

    public function hapus($id)
    {
        $this->db->where('userid', $id);
        $this->db->delete('Users');
        $this->session->set_flashdata('Pesan Hapus', 'Data Staff Sudah Dihapus!');
        redirect('Staff');
    }
}
