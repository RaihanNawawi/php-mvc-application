<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
    <h1>Welcome to the Profile Page</h1>
    <p>Name: <?= $data['nama']; ?></p>
    <p>Occupation: <?= $data['pekerjaan']; ?></p>
    <p>Age: <?= $data['umur']; ?> years old</p>
</body>
</html>