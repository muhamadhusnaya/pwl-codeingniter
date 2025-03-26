
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Tulis</title>
</head>
<body>
    <h1>Page Alat Tulis</h1>
    <ul>
        <?php foreach ($AlatTulis as $data) : ?>
            <li><?= $data ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="/kategori">Kembali ke kategori</a>
</body>
</html>