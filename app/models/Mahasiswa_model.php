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

    public function getMahasiswaById($id)
    {
        $this->dbh->query('SELECT * FROM ' . $this->table . ' WHERE id = :id'); // Menyiapkan query untuk mengambil data mahasiswa berdasarkan ID
        $this->dbh->bind('id', $id); // Mengikat parameter ID ke query
        return $this->dbh->single(); // Mengembalikan hasil sebagai satu data mahasiswa
    }   
}