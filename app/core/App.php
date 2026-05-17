<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        // cek apakah file controller yang dipanggil ada di folder controllers, jika ada maka controller akan diubah sesuai dengan url yang dipanggil
        if ( file_exists('../app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
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