<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    <h1>Page Snack</h1>
    <ul>
        <?php foreach ($Snack as $data) : ?>
            <li><?= $data ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="/kategori">Kembali ke kategori</a>
</body>
</html>