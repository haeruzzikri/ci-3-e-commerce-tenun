<?php
class Keranjang extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Keranjang - Tenun Pringgasela';
        $data['keranjang'] = $this->db->get_where('keranjang_produk', ['userid' => query_user('userid'), 'status' => 'Keranjang'])->result_array();
        $data['totalkeranjang'] = $this->db->get_where('keranjang_produk', ['userid' => query_user('userid'), 'status' => 'Keranjang'])->num_rows();
        view_user('keranjang', 'index', $data);
    }
    public function tambah_keranjang($idproduk)
    {
        $dataproduk = $this->db->get_where('produk', ['idproduk' => $idproduk])->row_array();

        $oi = crypt(rand(22, 999), time());
        $data = [
            'orderid' => '',
            'idproduk' => $idproduk,
            'userid' => query_user('userid'),
            'status' => 'keranjang',
            'qty' => '1',
            'subharga' => $dataproduk['hargaafter'] * 1
        ];
        $this->db->insert('keranjang', $data);
        redirect('Keranjang');
    }
    public function hapus($id)
    {
        $this->db->where('idcart', $id);
        $this->db->delete('Keranjang');
        $this->session->set_flashdata('Pesan Hapus', 'Data Keranjang Sudah Dihapus!');
        redirect('Keranjang');
    }
    public function update_keranjang($id)
    {
        $keranjang = $this->db->get_where('keranjang_produk', ['idcart' => $id])->row_array();
        $produk = $this->db->get_where('produk', ['idproduk' => $keranjang['idproduk']])->row_array();
        $produkHarga = $produk['hargaafter'];
        $jumlah = $this->input->post('jumlah');
        $data = [
            'qty' => $jumlah,
            'subharga' => $produkHarga * $jumlah
        ];

        $this->db->where('idcart', $id);
        $this->db->update('keranjang', $data);
        redirect('Keranjang');
    }
}
