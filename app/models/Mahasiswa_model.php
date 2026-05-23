<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Rizky",
            "nrp" => "123456789",
            "email" => "rizky@example.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Dewi",
            "nrp" => "987654321",
            "email" => "dewi@example.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Andi",
            "nrp" => "456789123",
            "email" => "andi@example.com",
            "jurusan" => "Teknik Informatika"
        ]
    ];

    public function getAllMahasiswa() {
        return $this->mhs;
    }
}