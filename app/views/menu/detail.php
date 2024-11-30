<?php
// Memanggil file koneksi dan model
include '../config/config.php';
include '../app/models/Menu.php';

$id = $_GET['id'];
$menu = Menu::getMenuById($id, $conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <header>
        <h1>Detail Menu</h1>
    </header>
    
    <div>
        <h2><?php echo $menu['nama']; ?></h2>
        <p><strong>Jenis Makanan:</strong> <?php echo $menu['jenis']; ?></p>
        <p><strong>Harga:</strong> <?php echo number_format($menu['harga'], 2, ',', '.'); ?></p>
    </div>
    
    <a href="index.php">Kembali ke Menu</a>
</body>
</html>