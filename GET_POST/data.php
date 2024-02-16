<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li>Nama : <?= &_GET["name"] ?></li>
        <li>Umur : <?= &_GET["age"] ?></li>
        <li>Jurusan : <?= &_GET["major"] ?></li>
        <li>
            <img src="<?= $_GET["image"] ?>" alt="">
        </li>
    </ul>

    <a href="get_post.php">kembali ke halaman utama</a>

</body>
</html>