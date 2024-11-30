<?php
// Pastikan session di-start jika Anda membutuhkan session untuk login
session_start();

// Arahkan pengguna ke login.php yang berada di app/views/users/
header("Location: ../app/views/users/login.php");
exit();
?>