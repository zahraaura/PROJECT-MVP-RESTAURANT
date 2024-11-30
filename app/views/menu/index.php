<?php
// Memanggil file koneksi dan model
include '../config/config.php';
include '../app/models/Menu.php';

// Menampilkan daftar menu
$menus = Menu::getAllMenus($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <header>
        <h1>Menu Restoran</h1>
        <a href="../app/controllers/MenuController.php?action=create">Tambah Menu</a>
        <a href="../app/controllers/UserController.php?action=logout">Logout</a>
    </header>
    
    <table>
        <thead>
            <tr>
                <th>Nama Makanan</th>
                <th>Jenis Makanan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menus as $menu) : ?>
                <tr>
                    <td><?php echo $menu['nama']; ?></td>
                    <td><?php echo $menu['jenis']; ?></td>
                    <td><?php echo number_format($menu['harga'], 2, ',', '.'); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $menu['id']; ?>">Edit</a> | 
                        <a href="delete.php?id=<?php echo $menu['id']; ?>">Delete</a> | 
                        <a href="detail.php?id=<?php echo $menu['id']; ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>