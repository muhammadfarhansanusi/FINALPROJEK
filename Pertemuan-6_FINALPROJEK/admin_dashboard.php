<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

require 'db.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style_admin_dashboard.css">
</head>
<body>
    <h1>Selamat datang, Admin <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    <a href="logout.php">Logout</a>

    <h2>Kelola Data</h2>
    <ul>
        <li><a href="atur_jadwal.php">Mengatur Jadwal Kereta</a></li>
    </ul>
</body>
</html>
