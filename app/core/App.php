<?php

class App {
    public function __construct() {
        // Mengecek apapun yang dikirim melalui URL
        // Misal http://localhost/phpmvc/public/?url=inidariuser
       var_dump($_GET); // akan menampilkan array dengan key url dan value "inidariuser"
    }
}