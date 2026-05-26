<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa'; // Nama tabel di database
    private $dbh; // Database handler/koneksi ke database

    public function __construct()
    {
        $this->dbh = new Database(); // Membuat instance dari class Database untuk koneksi ke database
    }

    public function getAllMahasiswa()
    {
        $this->dbh->query('SELECT * FROM ' . $this->table); // Menyiapkan query untuk mengambil semua data mahasiswa
        return $this->dbh->resultSet();
    }
}