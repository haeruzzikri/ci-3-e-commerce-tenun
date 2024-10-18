<?php
class Daftar_order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }
    public function index()
    {
        $data['title'] = 'Daftar Order - Tenun Pringgasela';
        $data['order'] = $this->Order_model->get_order();
        $data['num_order'] = $this->Order_model->num_order();
        view_user('daftarorder', 'index', $data);
    }
}
