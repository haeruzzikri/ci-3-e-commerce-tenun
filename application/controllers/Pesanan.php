<?php
class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_model');
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Kelola Pesanan - Tenun Pringgasela';
        $data['pesanan'] = $this->Pesanan_model->get_pesanan();
        view_admin('pesanan', 'index', $data);
    }

    public function detail($id){
        $data['title'] = 'Kelola Pesanan - Tenun Pringgasela';
        $data['pesanan'] = $this->db->get_where('detail_order',['idkonfirmasi' => $id])->row_array();
        $data['keranjang'] = $this->db->get_where('keranjang_produk',['orderid' => $data['pesanan']['orderid']])->result_array();
        $data['kurir'] = $this->db->get_where('layanan_pengiriman',['id_layanan' => $data['pesanan']['id_layanan']])->row_array();
        $data['pembayaran'] = $this->db->get_where('pembayaran',['no' => $data['pesanan']['id_pembayaran']])->row_array();
        view_admin('pesanan', 'detail', $data);
    }

    public function konfirmasi($id){
        $this->db->where('idkonfirmasi',$id);
        $this->db->update('konfirmasi', ['status' => 'Pesanan Di Konfirmasi']);
        redirect('Pesanan');
    }
    public function konfirmasi_pengiriman($id){
        $this->db->where('idkonfirmasi',$id);
        $this->db->update('konfirmasi', ['status' => 'Pengiriman']);
        redirect('Pesanan');
    }
}
