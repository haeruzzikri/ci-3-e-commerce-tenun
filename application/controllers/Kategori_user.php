<?php

use LDAP\Result;

class Kategori_user extends CI_Controller
{
    public function index($id)
    {
        $data['title'] = 'Kategori - Tenun Pringgasela';
        $data['produk'] = $this->db->get_where('produk', ['idkategori' => $id])->result_array();
        view_user('kategori', 'index', $data);
    }
}
