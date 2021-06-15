<?php

class pusat_bantuan extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Pusat Bantuan';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['kenyangin'] = $this->model('Barang_model')->getBarangUser($_SESSION['id']);
            $_SESSION['nama'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $this->view('templates/header', $data);
            $this->view('pusat_bantuan/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
