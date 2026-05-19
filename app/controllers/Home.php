<?php

class Home extends Controller {
    // method index akan dijalankan secara default ketika controller home dipanggil
    public function index() {
        // memanggil file view yang berada di folder app/views/home/index.php
        $this->view('home/index');
    }
}