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

    // Menampilkan pesan flash jika terdapat pesan dalam session (terisi/isset), dan kemudian menghapusnya dari session
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    ' . $_SESSION['flash']['status'] . ' ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}