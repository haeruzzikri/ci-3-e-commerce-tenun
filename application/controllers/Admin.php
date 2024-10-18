<?php
class Admin extends CI_Controller
{
    public function index()
    {
        is_admin();
        $data['title'] = 'Admin Home - Tenun Pringgasela';
        view_admin('dashboard', 'index', $data);
    }
}
