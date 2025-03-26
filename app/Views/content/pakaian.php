<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakaian</title>
</head>
<body>
    <h1>Page Pakaian</h1>
    <ul>
        <?php foreach ($Pakaian as $data) : ?>
            <li><?= $data ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="/kategori">Kembali ke kategori</a>
</body>
</html>