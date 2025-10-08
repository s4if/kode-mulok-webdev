<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    echo "hello world";
    $a = 1;
    $b = 2;
    $c = $a + $b;
    ?>
    </h1>
    <p>
        <?=$a;?> + <?=$b;?> = <?=$c?>
    </p>
</body>
</html>