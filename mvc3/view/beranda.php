<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - MVC Demo</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        .header { background: #f8f9fa; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .content { background: #e9ecef; padding: 20px; border-radius: 5px; }
        .logout-btn { background: #dc3545; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; }
        .logout-btn:hover { background: #c82333; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Selamat Datang di Beranda!</h1>
        <p>Halo, <strong><?php echo htmlspecialchars($username); ?></strong>!</p>
    </div>
    
    <div class="content">
        <h2>Dashboard</h2>
        <p>Ini adalah halaman beranda yang hanya bisa diakses setelah login.</p>
        <p>Di sini Anda bisa menampilkan konten yang spesifik untuk user yang sudah terautentikasi.</p>
        
        <br>
        <a href="index.php?page=logout" class="logout-btn">Logout</a>
    </div>
</body>
</html>