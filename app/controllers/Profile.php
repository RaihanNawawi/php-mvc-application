<?php

class Profile extends Controller {
    public function index($nama = 'User', $pekerjaan = 'Pekerjaan', $umur = 0) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', ['judul' => 'Profile']);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }
}