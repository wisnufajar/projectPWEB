<?php

class kenyangin extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kenyangin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['kenyangin'] = $this->model('Barang_model')->getBarangUser($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $this->view('templates/header', $data);
            $this->view('kenyangin/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            if (empty($_POST['cari'])) {
                $this->index();
            } else {
                $data['judul'] = 'Kenyangin';
                $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
                $_SESSION['username'] = $data['user']['username'];
                $_SESSION['foto'] = $data['user']['foto'];
                $data['kenyangin'] = $this->model('Barang_model')->cariKenyangin($_POST);
                $this->view('templates/header', $data);
                $this->view('kenyangin/cari', $data);
                $this->view('templates/footer');
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function detail($id)
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kenyangin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['kenyangin'] = $this->model('Barang_model')->getBarangByid($id);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('kenyangin/detail', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Kenyangin';
            $data['kenyangin'] = $this->model('Barang_model')->getBarangByid($id);
            $this->view('templates/header', $data);
            $this->view('kenyangin/detail', $data);
            $this->view('templates/footer');
        }
    }

    public function tambah()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kenyangin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('kenyangin/tambah', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubah($id)
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Kenyangin';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['kenyangin'] = $this->model('Barang_model')->getBarangByid($id);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('kenyangin/ubah', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapus($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapus($id) > 0) {
                Flasher::setFlash('Berhasil', 'Kenyangin telah dihapus', 'success');
                header('Location: ' . BASEURL . '/Kenyangin');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Kenyangin tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin');
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahKenyangin($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubah($id, $_POST) > 0) {
                Flasher::setFlash('Berhasil', 'Kenyangin telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Kenyangin tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto1($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapusFoto1($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto2($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapusFoto2($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto3($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapusFoto3($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto4($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapusFoto4($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto5($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapusFoto5($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto6($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->hapusFoto6($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto1($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubahFoto1($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto2($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubahFoto2($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto3($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubahFoto3($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto4($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubahFoto4($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto5($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubahFoto5($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto6($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->ubahFoto6($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/kenyangin/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin');
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function tambahKenyangin()
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Barang_model')->tambah($_POST, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Kenyangin telah ditambahkan', 'success');
                header('Location: ' . BASEURL . '/kenyangin');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Kenyangin tidak bertambah', 'danger');
                header('Location: ' . BASEURL . '/kenyangin');
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
