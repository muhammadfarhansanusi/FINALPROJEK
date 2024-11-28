<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'pemesanan_tiket');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan jadwal
$sql = "SELECT * FROM jadwal_kereta";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Kereta</title>
    <link rel="stylesheet" href="style_Layanan.css">
</head>
<body>
    <h1>Pemesanan Tiket Kereta Kelas Eksekutif</h1>
    <form action="proses_pemesanan.php" method="POST">
        <!-- Nama Penumpang -->
        <label for="nama">Nama Penumpang:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <!-- Stasiun Keberangkatan -->
        <label for="stasiun_keberangkatan">Stasiun Keberangkatan:</label><br>
        <select id="stasiun_keberangkatan" name="stasiun_keberangkatan" required>
            <option value="">-- Pilih Stasiun Keberangkatan --</option>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['stasiun_keberangkatan']}'>{$row['stasiun_keberangkatan']}</option>";
                }
            }
            ?>
        </select><br><br>

        <!-- Nama Kereta -->
        <label for="nama_kereta">Nama Kereta:</label><br>
        <select id="nama_kereta" name="nama_kereta" required>
            <option value="">-- Pilih Nama Kereta --</option>
            <?php
            $result->data_seek(0);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['nama_kereta']}'>{$row['nama_kereta']}</option>";
                }
            }
            ?>
        </select><br><br>

        <!-- Jam Keberangkatan -->
        <label for="jam_keberangkatan">Jam Keberangkatan:</label><br>
        <select id="jam_keberangkatan" name="jam_keberangkatan" required>
            <option value="">-- Pilih Jam Keberangkatan --</option>
            <?php
            $result->data_seek(0);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['jam_keberangkatan']}'>{$row['jam_keberangkatan']}</option>";
                }
            }
            ?>
        </select><br><br>

        <!-- Tanggal Keberangkatan -->
        <label for="tanggal_keberangkatan">Tanggal Keberangkatan:</label><br>
        <select id="tanggal_keberangkatan" name="tanggal_keberangkatan" required>
            <option value="">-- Pilih Tanggal Keberangkatan --</option>
            <?php
            $result->data_seek(0);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['tanggal_keberangkatan']}'>{$row['tanggal_keberangkatan']}</option>";
                }
            }
            ?>
        </select><br><br>

        <!-- Tujuan -->
        <label for="tujuan">Tujuan:</label><br>
        <select id="tujuan" name="tujuan" required>
            <option value="">-- Pilih Tujuan --</option>
            <?php
            $result->data_seek(0);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['tujuan']}'>{$row['tujuan']}</option>";
                }
            }
            ?>
        </select><br><br>

        <button type="submit">Pesan Tiket</button>
    </form>
</body>
</html>
