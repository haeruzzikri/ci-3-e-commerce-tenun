<?php
class Tentang extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Tentang Kami - Tenun Pringgasela';
        view_user('tentang', 'index', $data);
    }
}
