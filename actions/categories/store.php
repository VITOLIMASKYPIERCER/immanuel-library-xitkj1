<?php
// File ini menangani penambahan kategori baru, menampung kiriman form Tambah Kategori dari halaman kelola kategori
// Request diterima hanya lewat metode POST dengan penanda tambah_kategori, selebihnya akses ditolak
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// Kolom nama dan keterangan wajib terisi lengkap sebelum hasilnya dirangkum dan diperlihatkan kembali di layar
if (isset($_POST['name'], $_POST['description'])) {
  echo "Kategori baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
