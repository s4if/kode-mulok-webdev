<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php?notifikasi=Maaf, anda harus login dulu");
    exit();
}
?>
    <h1>Beranda</h1>
    <p>Selamat datang, <b><?php echo $_SESSION["username"]; ?></b>!</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
