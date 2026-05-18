<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        // Controller Logic
        if ( isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method Logic
        if ( isset($url[1]) ) {
            if ( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params Logic
        if ( !empty($url) ) {
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        // cek apakah ada data yang dikirimkan melalui url dengan key "url"
        if ( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/'); // menghapus karakter "/" di akhir string
            $url = explode('/', $url); // memecah string menjadi array berdasarkan karakter "/"
            return $url;
        }
        return [];
    }
}