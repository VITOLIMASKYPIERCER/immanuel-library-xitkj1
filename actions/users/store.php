<?php
// File ini mengelola pendaftaran pengguna baru, menampung kiriman form Tambah Pengguna dari halaman kelola pengguna
// Request hanya sah melalui metode POST dengan penanda tambah_pengguna, selebihnya akses ditolak
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// Kolom nama, surel, kata sandi, dan peran wajib terisi lengkap sebelum hasilnya ditampilkan ulang sebagai bukti
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Pengguna baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
