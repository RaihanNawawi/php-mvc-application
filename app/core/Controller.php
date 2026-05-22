<?php

class Controller {
    // method view digunakan untuk memanggil file view yang berada di folder app/views
    public function view($view, $data = []) {
        // memanggil file view yang berada di folder app/views
        require_once '../app/views/' . $view . '.php';
    }
    public function model($model) {
        // memanggil file model yang berada di folder app/models
        require_once '../app/models/' . $model . '.php';
        // instansiasi class model yang dipanggil
        return new $model;
    }
}