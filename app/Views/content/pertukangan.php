<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertukangan</title>
</head>
<body>
    <h1>Page Pertukangan</h1>
    <ul>
        <?php foreach ($Pertukangan as $data) : ?>
            <li><?= $data ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="/kategori">Kembali ke kategori</a>
</body>
</html>