<?php
class Konfirmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konfirmasi_model');
    }
    public function index($id)
    {
        $data['title'] = 'Konfirmasi Pembayaran - Tenun Pringgasela';
        $data['konfirmasi'] = $this->db->get_where('detail_order', ['idkonfirmasi' => $id])->row_array();
        $data['pembayaran'] = $this->db->get('pembayaran')->result_array();
        $confirm = $this->input->post('confirm');

        if (isset($confirm)) {
            $this->Konfirmasi_model->update_konfirmasi($id);
            redirect('Daftar_order');
        } else {
            view_user('konfirmasi', 'index', $data);
        }
    }

    public function barangsampai($id)
    {
        $this->db->where('idkonfirmasi', $id);
        $this->db->update('konfirmasi', ['status' => 'Barang Sampai']);
        redirect('Daftar_order');
    }
}
