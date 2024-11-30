<?php
// Memanggil file koneksi dan model
include '../config/config.php';
include '../app/models/Menu.php';

$id = $_GET['id'];
$menu = Menu::getMenuById($id, $conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    
    // Update menu di database
    Menu::updateMenu($id, $nama, $jenis, $harga, $conn);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <header>
        <h1>Edit Menu</h1>
    </header>
    
    <form method="POST">
        <label for="nama">Nama Makanan:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $menu['nama']; ?>" required>
        
        <label for="jenis">Jenis Makanan:</label>
        <input type="text" name="jenis" id="jenis" value="<?php echo $menu['jenis']; ?>" required>
        
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="<?php echo $menu['harga']; ?>" required>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>