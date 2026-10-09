<?php
// File ini mengurus pembaruan profil sendiri, menerima kiriman form Ubah Profil dari halaman profil
// Request hanya diterima lewat metode POST dengan penanda ubah_profil, selebihnya akses dianggap tidak sah
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_profil'])) {
  echo "Akses tidak valid.";
  return;
}
// Kolom nama, surel, telepon, alamat, dan riwayat singkat wajib terisi lengkap sebelum hasilnya ditampilkan sebagai konfirmasi
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo "Perubahan profil berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data profil tidak lengkap.";
}
