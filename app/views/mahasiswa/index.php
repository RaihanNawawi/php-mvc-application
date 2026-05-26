<?php
// memberi tahu Intelephense bahwa: $data memang ada dan bertipe array.
/** @var array $data */
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="pb-2">Daftar Mahasiswa</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($data['mhs'] as $mhs): ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['nrp']; ?></td>
                        <td>
                            <?= $mhs['email']; ?>
                        </td>
                        <td><?= $mhs['jurusan']; ?></td>
                        <td>
                            <a href="<?= BASE_URL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>