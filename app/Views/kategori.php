<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <h1>Ini adalah halaman Kategori</h1>
    <ul>
        <?php foreach ($Kategori as $key => $value) : ?>
            <li><a href="/kategori/<?= $value ?>"><?= $value ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a href="/">Kembali ke home</a>
</body>
</html>