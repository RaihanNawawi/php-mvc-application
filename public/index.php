<?php
// Jika belum ada session yang aktif, maka mulai session baru
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../app/init.php';

$app = new App();
?>