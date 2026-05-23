<?php

class Mahasiswa_model
{
    private $dbh; // database handler
    private $stmt; // statement (query)

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        // cek apakah koneksi berhasil
        try {
            $this->dbh = new PDO($dsn, 'root', ''); // PDO diisi dengan $dsn, username ('root'), password (''). 
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}