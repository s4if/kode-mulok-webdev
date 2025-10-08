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
    echo "Kalkulator";
    $a = $_GET["a"];
    $b = $_GET["b"];
    $op = $_GET["op"];
    ?>
    </h1>
    <h3>
    <?php if ($op == "tambah") {
        $c = $a + $b;
        echo $a . " + " . $b . " = " . $c;
    } elseif ($op == "kurang") {
        $c = $a - $b;
        echo $a . " - " . $b . " = " . $c;
    } elseif ($op == "kali") {
        $c = $a * $b;
        echo $a . " * " . $b . " = " . $c;
    } elseif ($op == "bagi") {
        $c = $a / $b;
        echo $a . " * " . $b . " = " . $c;
    }
// Tugas, pelajari perulangan di PHP
?>
    </h3>
</body>
</html>
