<?php
// Koneksi ke database
$servername = "localhost";  // Ganti dengan host database Anda
$username = "root";         // Ganti dengan username MySQL Anda
$password = "";             // Ganti dengan password MySQL Anda
$dbname = "user_management"; // Nama database

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
