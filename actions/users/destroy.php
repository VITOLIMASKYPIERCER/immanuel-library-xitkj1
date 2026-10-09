<?php
// File ini memproses hapus pengguna, menerima nomor identitas dari tautan hapus pada daftar pengguna
// Nomor identitas harus terbawa melalui alamat URL, bila tidak ada maka ditampilkan pesan identitas tidak ditemukan
if (isset($_GET['id'])) {
  echo "Pengguna dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
