<?php
class Produk_user extends CI_Controller
{
    public function detail_produk($id)
    {
        $data['title'] = 'Detail Produk - Tenun Pringgasela';
        $data['produk'] = $this->db->get_where('produk', ['idproduk' => $id])->row_array();
        view_user('produk', 'detail', $data);
    }
}
