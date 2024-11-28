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
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
$stmt->bind_param("ss", $email, $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Email atau Username sudah terdaftar.";
    exit();
}

// Simpan data pengguna baru
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Registrasi berhasil. <a href='login.php'>Login sekarang</a>";
} else {
    echo "Error: " . $conn->error;
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>
