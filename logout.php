<?php
session_start(); // memulai sesi

// menghapus semua data sesi
session_destroy();

// mengalihkan pengguna ke halaman login
header("Location: index.php");
exit;
?>