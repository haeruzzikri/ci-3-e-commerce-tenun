<?php
class Order_model extends CI_Model
{
    public function get_order()
    {
        $userid = queryUser('email');
        $this->db->order_by('idkonfirmasi', 'DESC');
        return $this->db->get_where('detail_order', ['email' => $userid])->result_array();
    }

    public function num_order(){
        $userid = queryUser('email');
        $this->db->order_by('idkonfirmasi', 'DESC');
        return $this->db->get_where('detail_order', ['email' => $userid])->num_rows();
    }
}
