<?php
class Staff_model extends CI_Model
{
    public function get_staff()
    {
        $data = ['Admin', 'Staf'];
        return $this->db->get_where('users', ['role' => 'Admin'])->result_array();
    }
    public function tambah_staff()
    {
        $data = array(
            'namalengkap' => $this->input->post('namastaff'),
            'notelp' => $this->input->post('notelp', true),
            'alamat' => $this->input->post('alamat', true),
            'role' => $this->input->post('role', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users', $data);
    }
}
