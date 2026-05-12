<?php

class App {
    public function __construct() {
        $url = $this->parseURL();
        var_dump($url); // akan tampil data yang dikirimkan melalui url, contoh: ?url=home , maka akan tampil string "home"
    }

    public function parseURL() {
        // cek apakah ada data yang dikirimkan melalui url dengan key "url"
        if ( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/'); // menghapus karakter "/" di akhir string
            $url = explode('/', $url); // memecah string menjadi array berdasarkan karakter "/"
            return $url;
        }
        return 'home';
    }
}