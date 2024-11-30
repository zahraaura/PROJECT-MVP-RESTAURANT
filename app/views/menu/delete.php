<?php
// Memanggil file koneksi dan model
include '../config/config.php';
include '../app/models/Menu.php';

$id = $_GET['id'];

// Hapus menu dari database
Menu::deleteMenu($id, $conn);

// Redirect ke halaman daftar menu
header('Location: index.php');
?>