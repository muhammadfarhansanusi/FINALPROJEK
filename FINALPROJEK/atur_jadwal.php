<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'pemesanan_tiket');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses tambah data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $stasiun_keberangkatan = $_POST['stasiun_keberangkatan'];
    $nama_kereta = $_POST['nama_kereta'];
    $jam_keberangkatan = $_POST['jam_keberangkatan'];
    $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
    $tujuan = $_POST['tujuan'];

    $sql = "INSERT INTO jadwal_kereta (stasiun_keberangkatan, nama_kereta, jam_keberangkatan, tanggal_keberangkatan, tujuan) 
            VALUES ('$stasiun_keberangkatan', '$nama_kereta', '$jam_keberangkatan', '$tanggal_keberangkatan', '$tujuan')";

    if ($conn->query($sql)) {
        echo "Jadwal berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan jadwal: " . $conn->error;
    }
}

// Proses hapus data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM jadwal_kereta WHERE id = $id";

    if ($conn->query($sql)) {
        echo "Jadwal berhasil dihapus.";
    } else {
        echo "Gagal menghapus jadwal: " . $conn->error;
    }
}

// Ambil semua data jadwal
$sql = "SELECT * FROM jadwal_kereta";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Jadwal Kereta</title>
    <link rel="stylesheet" href="atur_jadwal.css">
</head>
<body>
    <h1>Kelola Jadwal Kereta</h1>

    <!-- Form Tambah Jadwal -->
    <h2>Tambah Jadwal Baru</h2>
    <form method="POST" action="">
        <input type="hidden" name="add" value="1">
        <label for="stasiun_keberangkatan">Stasiun Keberangkatan:</label><br>
        <input type="text" id="stasiun_keberangkatan" name="stasiun_keberangkatan" required><br><br>

        <label for="nama_kereta">Nama Kereta:</label><br>
        <input type="text" id="nama_kereta" name="nama_kereta" required><br><br>

        <label for="jam_keberangkatan">Jam Keberangkatan:</label><br>
        <input type="time" id="jam_keberangkatan" name="jam_keberangkatan" required><br><br>

        <label for="tanggal_keberangkatan">Tanggal Keberangkatan:</label><br>
        <input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan" required><br><br>

        <label for="tujuan">Tujuan:</label><br>
        <input type="text" id="tujuan" name="tujuan" required><br><br>

        <button type="submit">Tambah Jadwal</button>
        <button type="button" onclick="window.location.href='admin_dashboard.php';">Kembali</button>
    </form>

    <!-- Tabel Jadwal -->
    <h2>Daftar Jadwal</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Stasiun Keberangkatan</th>
            <th>Nama Kereta</th>
            <th>Jam Keberangkatan</th>
            <th>Tanggal Keberangkatan</th>
            <th>Tujuan</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['stasiun_keberangkatan']}</td>
                        <td>{$row['nama_kereta']}</td>
                        <td>{$row['jam_keberangkatan']}</td>
                        <td>{$row['tanggal_keberangkatan']}</td>
                        <td>{$row['tujuan']}</td>
                        <td>
                            <form method='POST' action='' style='display:inline;'>
                                <input type='hidden' name='delete' value='1'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' onclick='return confirm(\"Yakin ingin menghapus jadwal ini?\")'>Hapus</button>
                            </form>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada jadwal tersedia.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
