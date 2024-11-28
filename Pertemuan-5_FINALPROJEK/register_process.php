<?php
// Koneksi database
require 'db.php';

// Ambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi password
if ($password !== $confirm_password) {
    echo "Password dan konfirmasi password tidak cocok.";
    exit();
}

// Hash password untuk keamanan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Cek apakah email atau username sudah terdaftar
$query = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Email atau Username sudah terdaftar.";
    exit();
}

// Simpan data pengguna baru
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
if (mysqli_query($conn, $query)) {
    echo "Registrasi berhasil. <a href='login.php'>Login sekarang</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
