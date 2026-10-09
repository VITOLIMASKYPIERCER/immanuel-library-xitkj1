<?php
// File ini mengurus pembaruan data penulis, menerima kiriman form Ubah Penulis dari daftar penulis
// Request wajib berjenis POST dengan penanda ubah_penulis, bila tidak sesuai maka akses dianggap tidak sah
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// Nomor identitas, nama, dan riwayat singkat wajib tersedia lengkap sebelum perubahannya ditampilkan ulang sebagai bukti
if (isset($_POST['id'], $_POST['name'], $_POST['bio'])) {
  echo "Perubahan penulis berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
