<?php
$url = "product/detail/\n\t5";

echo "Sebelum: ";
var_dump($url);

$url = filter_var($url, FILTER_SANITIZE_URL);

echo "<br>Sesudah: ";
var_dump($url);