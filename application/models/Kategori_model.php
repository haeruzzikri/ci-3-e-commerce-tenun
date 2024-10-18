<?php
class Kategori_model extends CI_Model
{
    public function get_kategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function tambah_kategori()
    {
        $data = array(
            'namakategori' => $this->input->post('namakategori', true),
        );
        $this->db->insert('kategori', $data);
    }
    public function edit($id)
    {
        $data = array(
            'namakategori' => $this->input->post('namakategori', true),
        );
        $this->db->where('idkategori', $id);
        $this->db->update('kategori', $data);
    }
}
