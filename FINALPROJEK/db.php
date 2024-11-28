<?php
$servername = "localhost"; // Nama server database
$username = "root";        // Username database
$password = "";            // Password database
$dbname = "user_management"; // Nama database Anda

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
