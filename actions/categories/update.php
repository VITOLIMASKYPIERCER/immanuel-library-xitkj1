<?php
// File ini mengurus perubahan kategori, menerima kiriman form Ubah Kategori dari daftar kategori
// Request harus memakai metode POST dengan penanda ubah_kategori, jika tidak sesuai maka akses dianggap tidak sah
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// Nomor identitas beserta nama dan keterangan wajib lengkap sebelum hasilnya disusun dan ditampilkan sebagai konfirmasi
if (isset($_POST['id'], $_POST['name'], $_POST['description'])) {
  echo "Perubahan kategori berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
