<?php

class Mahasiswa extends Controller {
    public function index() {
        $this->view('templates/header', ['judul' => 'Mahasiswa']);
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }
}