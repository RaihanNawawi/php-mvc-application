<?php
// memberi tahu Intelephense bahwa: $data memang ada dan bertipe array.
/** @var array $data */
 ?>
    <h1>Welcome to the Profile Page</h1>
    <p>Name: <?= $data['nama']; ?></p>
    <p>Occupation: <?= $data['pekerjaan']; ?></p>
    <p>Age: <?= $data['umur']; ?> years old</p>