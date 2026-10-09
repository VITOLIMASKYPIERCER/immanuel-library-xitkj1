<?php
// File ini mengelola penambahan penulis baru, menampung kiriman form Tambah Penulis dari halaman data penulis
// Request hanya diterima melalui metode POST dengan penanda tambah_penulis, selebihnya akses ditolak
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// Kolom nama dan riwayat singkat wajib terisi lengkap sebelum hasilnya disusun dan diperlihatkan kembali sebagai konfirmasi
if (isset($_POST['name'], $_POST['bio'])) {
  echo "Penulis baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
