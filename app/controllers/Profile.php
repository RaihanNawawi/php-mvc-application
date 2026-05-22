<?php

class Profile extends Controller {
    public function index() {
        // memanggil method getUser dari class User_model yang berada di folder app/models
        $data['nama'] = $this->model('User_model')->getUser();
        $data['pekerjaan'] = $this->model('User_model')->getPekerjaan();
        $data['umur'] = $this->model('User_model')->getUmur();
        $this->view('templates/header', ['judul' => 'Profile']);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }
}