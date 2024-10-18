<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }
    public function index()
    {

        $data['title'] = 'Home - Tenun Pringgasela';
        $data['produk'] = $this->Produk_model->get_produk();
        view_user('home', 'index', $data);
    }
}
