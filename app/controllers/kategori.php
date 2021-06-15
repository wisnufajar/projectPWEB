<?php

class kategori extends Controller
{

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kenyangin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['jenis_makanan'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Kenyangin';
            $data['jenis_makanan'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function makanan()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kategori Makanan';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['jenis_makanan'] = $this->model('Barang_model')->getMakanan();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Kategori Makanan';
            $data['jenis_makanan'] = $this->model('Barang_model')->getMakanan();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function cemilan()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kategori Cemilan';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['jenis_makanan'] = $this->model('Barang_model')->getCemilan();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Kategori Cemilan';
            $data['jenis_makanan'] = $this->model('Barang_model')->getCemilan();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function minuman()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kategori Minuman';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['jenis_makanan'] = $this->model('Barang_model')->getMinuman();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Kategori Minuman';
            $data['jenis_makanan'] = $this->model('Barang_model')->getMinuman();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }
}