<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'pemesanan_tiket');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama_penumpang = $_POST['nama'];
$stasiun_keberangkatan = $_POST['stasiun_keberangkatan'];
$nama_kereta = $_POST['nama_kereta'];
$jam_keberangkatan = $_POST['jam_keberangkatan'];
$tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
$tujuan = $_POST['tujuan'];

// Query untuk menyimpan data ke tabel pemesanan
$sql = "INSERT INTO pemesanan (nama_penumpang, stasiun_keberangkatan, nama_kereta, jam_keberangkatan, tanggal_keberangkatan, tujuan)
        VALUES ('$nama_penumpang', '$stasiun_keberangkatan', '$nama_kereta', '$jam_keberangkatan', '$tanggal_keberangkatan', '$tujuan')";

if ($conn->query($sql) === TRUE) {
    echo "Pemesanan berhasil disimpan!";
    echo "<br><a href='index.php'>Kembali ke halaman pemesanan</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
