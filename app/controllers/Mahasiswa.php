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
        }
    }
}