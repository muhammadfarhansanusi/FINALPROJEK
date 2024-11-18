<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        p strong {
            color: #333;
        }
        .error {
            color: red;
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Fungsi untuk membuat ID pelanggan unik
        function generateCustomerId() {
            $timestamp = time(); // Mendapatkan waktu saat ini dalam format UNIX timestamp
            $randomNumber = rand(1000, 9999); // Membuat angka acak 4 digit
            return "CUST" . $timestamp . $randomNumber; // Menggabungkan prefix, timestamp, dan angka acak
        }

        // Tangkap data dari form pemesanan
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Validasi dan ambil data
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Tidak tersedia';
            $idNumber = isset($_POST['id_number']) ? htmlspecialchars($_POST['id_number']) : 'Tidak tersedia';
            $contact = isset($_POST['contact']) ? htmlspecialchars($_POST['contact']) : 'Tidak tersedia';
            $departure = isset($_POST['departure']) ? htmlspecialchars($_POST['departure']) : 'Tidak tersedia';
            $destination = isset($_POST['destination']) ? htmlspecialchars($_POST['destination']) : 'Tidak tersedia';
            $price = isset($_POST['price']) ? htmlspecialchars($_POST['price']) : 0;

            // Periksa apakah semua data telah diisi
            if (empty($departure) || empty($destination) || empty($price)) {
                echo "<p class='error'>Mohon lengkapi semua data keberangkatan, tujuan, dan harga!</p>";
                exit;
            }

            // Buat ID pelanggan unik
            $customerId = generateCustomerId();

            // Tampilkan data pelanggan
            echo "<h1>Konfirmasi Pemesanan</h1>";
            echo "<p>ID Pelanggan: <strong>$customerId</strong></p>";
            echo "<p>Nama: $name</p>";
            echo "<p>Nomor Identitas: $idNumber</p>";
            echo "<p>Kontak: $contact</p>";
            echo "<p>Keberangkatan: $departure</p>";
            echo "<p>Tujuan: $destination</p>";
            echo "<p>Harga Tiket: Rp" . number_format($price, 0, ',', '.') . "</p>";
        } else {
            echo "<p class='error'>Halaman ini tidak dapat diakses secara langsung.</p>";
        }
        ?>
        <div class="footer">
            <p>© 2024 Pemesanan Tiket</p>
        </div>
    </div>
</body>
</html>
