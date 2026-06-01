<?php

class Flasher {

    // Menentukan pesan flash dengan parameter status (berhasil/gagal), aksi (ditambahkan/diubah/dihapus), dan tipe class (success/danger)
    public static function setFlash($status, $aksi, $tipe)
    {
        // Menyimpan pesan flash ke dalam session dengan struktur array yang berisi status, aksi, dan tipe
        $_SESSION['flash'] = [
            'status' => $status,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
}