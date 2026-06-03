<?php
// memberi tahu Intelephense bahwa: $data memang ada dan bertipe array.

/** @var array $data */
?>
<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h2 class="pb-2">Edit Mahasiswa</h2>
      <form action="<?= BASE_URL; ?>/mahasiswa/update/<?= $data['mhs']['id']; ?>" method="post"> <!-- Ganti action form dengan URL yang mengarah ke method update -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nama</span>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['mhs']['nama']; ?>">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">NIM</span>
        <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $data['mhs']['nrp']; ?>">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input type="email" class="form-control" id="email" name="email" value="<?= $data['mhs']['email']; ?>">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Jurusan</span>
        <select class="form-select" id="jurusan" name="jurusan">
          <option value="Teknik Informatika" <?= $data['mhs']['jurusan'] === 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
          <option value="Sistem Informasi" <?= $data['mhs']['jurusan'] === 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
          <option value="Teknik Elektro" <?= $data['mhs']['jurusan'] === 'Teknik Elektro' ? 'selected' : ''; ?>>Teknik Elektro</option>
        </select>
      </div>
    </div>
    <div class="card-footer text-muted row">
      <div class="col-md-6">
        <a href="<?= BASE_URL; ?>/mahasiswa" class="btn btn-secondary col-md-2">&laquo; Kembali</a>
      </div>

      <div class="col-md-6 text-end">
        <button type="submit" class="btn btn-primary justify-content-end col-md-2">Simpan</button> <!-- Ganti tombol submit dengan link yang mengarah ke method update -->
      </div>
    </div>
    </form>
  </div>
</div>