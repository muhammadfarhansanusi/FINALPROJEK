<?php
$name = $_GET['name'] ?? 'N/A';
$departure = $_GET['departure'] ?? 'N/A';
$destination = $_GET['destination'] ?? 'N/A';
$date = $_GET['date'] ?? 'N/A';
$time = $_GET['time'] ?? 'N/A';
$price = $_GET['price'] ?? 'N/A';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Pembayaran</title>
</head>
<body>
  <h1>Konfirmasi Pembayaran</h1>
  <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($name) ?></p>
  <p><strong>Keberangkatan:</strong> <?= htmlspecialchars($departure) ?></p>
  <p><strong>Tujuan:</strong> <?= htmlspecialchars($destination) ?></p>
  <p><strong>Tanggal:</strong> <?= htmlspecialchars($date) ?></p>
  <p><strong>Waktu:</strong> <?= htmlspecialchars($time) ?></p>
  <p><strong>Harga:</strong> Rp <?= number_format((float)$price, 0, ',', '.') ?></p>
  <button onclick="window.history.back()">Kembali</button>
</body>
</html>


