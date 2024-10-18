<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $data['title'] = 'Masuk - Tenun Pringgasela';
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        if ($this->form_validation->run() == false) {
            view_auth('login', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect('Admin');
                } else {
                    redirect('Home');
                }
            } else {
                $this->session->flashdata('Pesan', 'Password Salah');
                redirect('Auth');
            }
        } else {
            $this->session->flashdata('Pesan', 'Email Tidak Terdaftar');
            redirect('Auth');
        }
    }
    public function daftar()
    {
        $data['title'] = 'Daftar - Tenun Pringgasela';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[6]|matches[pass2]', [
            'min_length' => 'Password Minimal 6 Karakter', 'matches' => 'Password Harus Sama'
        ]);
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|min_length[6]|matches[pass]');
        if ($this->form_validation->run() == false) {

            view_auth('daftar', $data);
        } else {
            $this->Auth_model->set_user();
            $this->session->set_flashdata('Pesan', 'Anda Berhasil Daftar');
            redirect('Auth');
        }
    }
    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        redirect('Auth');
    }
}
