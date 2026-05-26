<?php
// memberi tahu Intelephense bahwa: $data memang ada dan bertipe array.
/** @var array $data */
?>
<div class="container">
<div class="card mt-4">
  <div class="card-body">
    <h2 class="pb-2">Detail Mahasiswa</h2>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nama</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['mhs']['nama']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">NIM</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['mhs']['nrp']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Email</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['mhs']['email']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Jurusan</span>
  <input type="text" class="form-control disabled" placeholder="<?= $data['mhs']['jurusan']; ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
  <div class="card-footer text-muted">
    <a href="<?= BASE_URL; ?>/mahasiswa" class="btn btn-secondary">&laquo; Kembali</a>
  </div>
</div>
</div>