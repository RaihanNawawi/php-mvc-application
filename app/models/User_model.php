<?php

class User_model {
    private $nama = 'John Doe';
    private $pekerjaan = 'Software Engineer';
    private $umur = 30;

    public function getUser() {
        return $this->nama;
    }

    public function getPekerjaan() {
        return $this->pekerjaan;
    }

    public function getUmur() {
        return $this->umur;
    }
}