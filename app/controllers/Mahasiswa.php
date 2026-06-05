<?php

class Mahasiswa extends Controller {
    public function index() {
        $this->view('templates/header', ['judul' => 'Mahasiswa']);
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $this->view('templates/header', ['judul' => 'Detail Mahasiswa']);
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        // Jika ada baris baru ditambahkan, maka kembalikan ke halaman index (mahasiswa)
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }
    
    public function edit($id) {
        $this->view('templates/header', ['judul' => 'Edit Mahasiswa']);
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    public function update($id) {
        if ($this->model('Mahasiswa_model')->updateDataMahasiswa($id, $_POST) > 0) {
            Flasher::setFlash('berhasil', 'diupdate', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function cari() {
        $this->view('templates/header', ['judul' => 'Mahasiswa']);
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}