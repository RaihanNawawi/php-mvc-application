<?php

class Mahasiswa extends Controller {
    public function index() {
        $this->view('templates/header', ['judul' => 'Mahasiswa']);
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}