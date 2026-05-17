<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct() {
        $url = $this->parseURL();
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