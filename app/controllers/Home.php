<?php

class Home {
    // method index akan dijalankan secara default ketika controller home dipanggil
    public function index() {
        echo "Home/index";
    }
    // method profile akan dijalankan ketika controller home dipanggil dengan method profile, contoh: ?url=home/profile
    public function profile($nama = 'User', $pekerjaan = 'Pekerjaan') {
        echo "Halo, nama saya adalah " . strtoupper($nama) . " dan saya adalah seorang " . strtoupper($pekerjaan);
    }
}