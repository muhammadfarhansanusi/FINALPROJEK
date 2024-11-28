<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $id_number = $_POST['id_number'];
  $contact = $_POST['contact'];

  echo "<h1>Halaman Pembayaran</h1>";
  echo "<p>Nama: $name</p>";
  echo "<p>Nomor Identitas: $id_number</p>";
  echo "<p>Kontak: $contact</p>";
  echo "<p>Silakan lanjutkan pembayaran Anda.</p>";
}


?>
