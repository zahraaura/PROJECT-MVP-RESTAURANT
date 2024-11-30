<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <h1>Tambah Menu Restoran</h1>
    <form action="index.php?controller=menu&action=add" method="POST">
        <label for="name">Nama Makanan:</label>
        <input type="text" id="name" name="name" required>
        <label for="type">Jenis Makanan:</label>
        <input type="text" id="type" name="type" required>
        <label for="price">Harga:</label>
        <input type="number" id="price" name="price" required>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>