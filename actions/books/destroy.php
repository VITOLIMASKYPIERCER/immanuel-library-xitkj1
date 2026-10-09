<?php
// File ini memproses hapus buku, menerima nomor identitas buku dari tautan hapus di daftar buku
// Nomor identitas wajib terbawa lewat alamat URL, jika tidak ada maka ditampilkan pesan identitas tidak ditemukan
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
