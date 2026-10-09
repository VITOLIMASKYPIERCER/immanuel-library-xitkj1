<?php
// File ini menangani pembaruan akun pengguna, menerima kiriman form Ubah Pengguna dari daftar pengguna
// Request wajib memakai metode POST dengan penanda ubah_pengguna, bila tidak sesuai akses dianggap tidak sah
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// Nomor identitas beserta nama, surel, dan peran wajib tersedia lengkap sebelum perubahannya diperlihatkan kembali sebagai konfirmasi
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) {
  echo "Perubahan pengguna berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
