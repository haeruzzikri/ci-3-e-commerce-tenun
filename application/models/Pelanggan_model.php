<?php
class Pelanggan_model extends CI_Model
{
    public function get_pelanggan()
    {
        return $this->db->get_where('users', ['role' => 'Member'])->result_array();
    }
}
