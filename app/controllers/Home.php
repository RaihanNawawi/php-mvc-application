<?php

class Home extends Controller {
    // method index akan dijalankan secara default ketika controller home dipanggil
    public function index() {
        // memanggil file view yang berada di folder app/views/home/index.php
        $this->view('home/index');
    }
    // method profile akan dijalankan ketika controller home dipanggil dengan method profile, contoh: ?url=home/profile
    public function profile($nama = 'User', $pekerjaan = 'Pekerjaan') {
        echo "Halo, nama saya adalah " . strtoupper($nama) . " dan saya adalah seorang " . strtoupper($pekerjaan);
    }
}