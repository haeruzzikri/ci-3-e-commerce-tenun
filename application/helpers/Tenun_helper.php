<?php
function view_admin($folder, $file, $data)
{
    $ci = get_instance();
    $ci->load->view('admin/template/sidebar', $data);
    $ci->load->view('admin/template/header', $data);
    $ci->load->view('admin/' . $folder . '/' . $file, $data);
    $ci->load->view('admin/template/footer', $data);
}
function view_auth($file, $data)
{
    $ci = get_instance();
    $ci->load->view('user/template/header', $data);
    $ci->load->view('auth/' . $file, $data);
    $ci->load->view('user/template/footer', $data);
}
function view_user($folder, $file, $data)
{
    $ci = get_instance();
    $ci->load->view('user/template/header', $data);
    $ci->load->view('user/' . $folder . '/' . $file, $data);
    $ci->load->view('user/template/footer', $data);
}
function jumlah_kategori($kategori)
{
    $ci = get_instance();
    return $ci->db->get_where('detail_produk', ['namakategori' => $kategori])->num_rows();
}
function query_user($query)
{
    $ci = get_instance();
    $user = $ci->session->userdata('email');
    $queryUser = $ci->db->get_where('users', ['email' => $user])->row_array();
    return $queryUser[$query];
}
function query_kategori()
{
    $ci = get_instance();
    $kategori = $ci->db->get('kategori')->result_array();
    return $kategori;
}
function query_jasa()
{
    $ci = get_instance();
    $jasa = $ci->db->get('layanan_pengiriman')->result_array();
    return $jasa;
}
function query_bayar()
{
    $ci = get_instance();
    $bayar = $ci->db->get('pembayaran')->result_array();
    return $bayar;
}

function queryUser($cari)
{
    $ci = get_instance();

    $email = $ci->session->userdata('email');
    $user = $ci->db->get_where('users', ['email' => $email])->row_array();

    return $user[$cari];
}


function is_admin(){
    $ci = get_instance();

    if($ci->session->userdata('role') != 'Admin'){
        redirect('Auth');
    }
}
function is_user(){
    $ci = get_instance();

    if($ci->session->userdata('role') == 'Member'){
        redirect('Auth');
    }
}

function active($controller){
    $ci = get_instance();

    $url = $ci->uri->segment(1);

    if($url == $controller){
        return 'active';
    }
}