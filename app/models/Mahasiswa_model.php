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

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :nama, :nrp, :email, :jurusan)"; // Query untuk menambahkan data mahasiswa
        $this->dbh->query($query); // Menyiapkan query
        $this->dbh->bind('nama', $data['nama']); // Mengikat parameter nama
        $this->dbh->bind('nrp', $data['nrp']); // Mengikat parameter NRP
        $this->dbh->bind('email', $data['email']); // Mengikat parameter email
        $this->dbh->bind('jurusan', $data['jurusan']); // Mengikat parameter jurusan

        $this->dbh->execute(); // Menjalankan query

        return $this->dbh->rowCount(); // Cek apakah ada baris yang terpengaruh (berhasil ditambahkan)
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id"; // Query untuk menghapus data mahasiswa berdasarkan ID
        $this->dbh->query($query); // Menyiapkan query
        $this->dbh->bind('id', $id); // Mengikat parameter ID
        
        $this->dbh->execute(); // Menjalankan query
        return $this->dbh->rowCount(); // Cek apakah ada baris yang terpengaruh (berhasil dihapus)
    }

    public function updateDataMahasiswa($id, $data)
    {
        $query = "UPDATE " . $this->table . " SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id"; // Query untuk mengupdate data mahasiswa berdasarkan ID
        $this->dbh->query($query); // Menyiapkan query
        $this->dbh->bind('nama', $data['nama']); // Mengikat parameter nama
        $this->dbh->bind('nrp', $data['nrp']); // Mengikat parameter NRP
        $this->dbh->bind('email', $data['email']); // Mengikat parameter email
        $this->dbh->bind('jurusan', $data['jurusan']); // Mengikat parameter jurusan
        $this->dbh->bind('id', $id); // Mengikat parameter ID
        $this->dbh->execute(); // Menjalankan query
        return $this->dbh->rowCount(); // Cek apakah ada baris yang terpengaruh (berhasil diupdate)
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword']; // Mengambil keyword dari form pencarian
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword OR nrp LIKE :keyword OR email LIKE :keyword OR jurusan LIKE :keyword"; // Query untuk mencari data mahasiswa berdasarkan keyword
        $this->dbh->query($query); // Menyiapkan query
        $this->dbh->bind('keyword', "%$keyword%"); // Mengikat parameter keyword dengan wildcard untuk pencarian
        return $this->dbh->resultSet(); // Mengembalikan hasil pencarian sebagai array of mahasiswa
    }
}