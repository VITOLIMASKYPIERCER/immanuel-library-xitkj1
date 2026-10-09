<?php
// File ini memproses hapus kategori, menerima nomor identitas dari tautan hapus di daftar kategori
// Nomor identitas wajib terbawa lewat alamat URL, jika tidak ada maka tampil pesan identitas tidak ditemukan
if (isset($_GET['id'])) {
  echo "Kategori dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID kategori tidak ditemukan.";
}
