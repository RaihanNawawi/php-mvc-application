<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul'] ?? 'Default'; ?> Page</title>
  <!-- Bootstrap CSS -->
  <link href="<?= BASE_URL ?>/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL ?>/">My App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/mahasiswa">Mahasiswa</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>