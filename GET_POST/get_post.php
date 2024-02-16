<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    
    <?php foreach( $students as $studennt ) : ?>
        <ul>
            <li><a href="data.php?name=<?= $student["name"] ?>&
            age= <?= $student["age"] ?>&
            major <?= $student["major"] ?>&
            image <?= $student["image"] ?>"><?= $student["name"] ?></a></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>