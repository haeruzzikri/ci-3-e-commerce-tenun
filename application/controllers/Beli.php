<?php
class Beli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beli_model');
    }
    public function index($total)
    {
        $data['total'] = $total;
        $data['io'] = crypt(rand(22, 999), time());
        $data['title'] = 'Buat Pesanan - Tenun Pringgasela';
        $userid = queryUser('userid');
        $data['keranjang'] = $this->db->get_where('keranjang_produk', ['userid' => $userid, 'status' => 'keranjang'])->result_array();
        $this->form_validation->set_rules('totalharga', 'Total Harga', 'required');
        if ($this->form_validation->run() == false) {
            view_user('beli', 'index', $data);
        } else {
            $this->Beli_model->tambah_konfirmasi();
            redirect('Daftar_order');
        }
    }
}
