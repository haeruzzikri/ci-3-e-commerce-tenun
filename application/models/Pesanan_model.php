<?php
class Pesanan_model extends CI_Model
{
    public function get_pesanan()
    {
        $this->db->order_by('idkonfirmasi','DESC');
        return $this->db->get('detail_order')->result_array();
    }
}
