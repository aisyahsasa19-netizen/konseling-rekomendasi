<?php
$host = "localhost";      // hostname server
$user = "root";           // username MySQL (default laragon: root)
$pass = "";               // password MySQL (default laragon: kosong)
$db   = "konseling";      // nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
