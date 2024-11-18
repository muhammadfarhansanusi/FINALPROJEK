<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi Tiket Kereta Api</title>
  <link rel="stylesheet" href="css/style_Ekonomi.css">
</head>
<body>
  <header>
    <h1>Sistem Pemesanan Tiket Kereta Kelas Ekonomi</h1>
  </header>

  <main>

    <section class="search-section">
      <h2>Cari Tiket</h2>
      <form class="search-form">
        <label for="departure">Stasiun Keberangkatan:</label>
        <select id="departure">
        <option value="" disabled selected>Pilih stasiun keberangkatan</option>
        <option value="jakarta">Jakarta</option>
        <option value="bandung">Bandung</option>
        <option value="surabaya">Surabaya</option>
        <option value="yogyakarta">Yogyakarta</option>
        </select>

    <label for="destination">Stasiun Tujuan:</label>
      <select id="destination">
      <option value="" disabled selected>Pilih stasiun tujuan</option>
      <option value="jakarta">Jakarta</option>
      <option value="bandung">Bandung</option>
      <option value="surabaya">Surabaya</option>
      <option value="yogyakarta">Yogyakarta</option>
      </select>

      <label for="date">Tanggal Keberangkatan:</label>
      <input type="date" id="date">

      <label for="passengers">Jumlah Penumpang:</label>
      <input type="number" id="passengers" min="1" value="1">

      <button type="submit">Cari Tiket</button>
      </form>
    </section>


    <section class="results-section">
      <h2>Hasil Pencarian</h2>
      <div class="ticket-card">
        <h3>Kereta Api Ekonomi</h3>
        <p>Keberangkatan: Stasiun A</p>
        <p>Tujuan: Stasiun B</p>
        <p>Waktu: 08:00 - 14:00</p>
        <p>Harga: Rp 50.000</p>
        <button>Pesan Sekarang</button>
      </div>
    </section>

    <section class="booking-section">
      <h2>Detail Pemesanan</h2>
      <form class="booking-form" action="Pembayaran.php" method="POST">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>

        <label for="id-number">Nomor Identitas:</label>
        <input type="text" id="id-number" name="id_number" placeholder="Masukkan nomor KTP/SIM" required>

        <label for="contact">Nomor Kontak:</label>
        <input type="text" id="contact" name="contact" placeholder="Masukkan nomor telepon" required>

    <!-- Input hidden untuk data tiket -->
    <input type="hidden" name="departure" value="Jakarta"> <!-- Ganti dengan data dinamis -->
    <input type="hidden" name="destination" value="Surabaya"> <!-- Ganti dengan data dinamis -->
    <input type="hidden" name="price" value="50000"> <!-- Ganti dengan data dinamis -->

    <button type="submit">Konfirmasi Pemesanan</button>
    </form>
    </section>


  </main>

  <footer>
    <p>&copy; 2024 Reservasi Kereta. Semua Hak Dilindungi.</p>
  </footer>
</body>
</html>
