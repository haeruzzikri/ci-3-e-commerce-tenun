<?php
class Pembayaran_model extends CI_Model
{
    public function get_pembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }
    public function tambah_metode()
    {
        $data = array(
            'metode' => $this->input->post('namametode'),
            'norek' => $this->input->post('norek', true),
            'logo' => $this->input->post('urllogo', true),
            'an' => $this->input->post('an', true),
        );
        $this->db->insert('pembayaran', $data);
    }
}
