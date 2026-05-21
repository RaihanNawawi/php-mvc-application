<?php
// memberi tahu Intelephense bahwa: $data memang ada dan bertipe array.
/** @var array $data */
 ?>
 <div class="container">
<div class="card mt-4">
  <div class="card-body">
    <h2 class="pb-2">Welcome to the Profile Page</h2>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nama</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['nama']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Pekerjaan</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['pekerjaan']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Umur</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['umur']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
</div>
</div>