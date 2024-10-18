<?php
class Beli_model extends CI_Model
{
    public function tambah_konfirmasi()
    {
        $data = [
            'id_layanan' => $this->input->post('kirim'),
            'id_pembayaran' => $this->input->post('bayar'),
            'alamat' => $this->input->post('alamat'),
            'total_harga' => $this->input->post('totalharga'),
            'orderid' => $this->input->post('kdorder'),
            'userid' => queryUser('userid')
        ];
        $this->db->insert('konfirmasi', $data);
        $this->update_keranjang();
    }
    public function update_keranjang()
    {
        $keranjang = $this->db->get_where('keranjang', ['userid' => queryUser('userid'), 'status' => 'keranjang'])->result_array();
        foreach ($keranjang as $k) {
            $data = [
                'orderid' => $this->input->post('kdorder'),
                'status' => 'Belum Bayar'
            ];
            $this->db->where('idcart', $k['idcart']);
            $this->db->update('keranjang', $data);
        }
    }
}
