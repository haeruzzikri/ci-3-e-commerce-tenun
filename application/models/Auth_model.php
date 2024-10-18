<?php
class Auth_model extends CI_Model
{
    public function set_user()
    {
        $data = [
            'namalengkap' => $this->input->post('nama', true),
            'notelp' => $this->input->post('telp', true),
            'email' => $this->input->post('email', true),
            'alamat' => $this->input->post('alamat', true),
            'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
            'role' => 'Member'
        ];
        $this->db->insert('users', $data);
    }
}
