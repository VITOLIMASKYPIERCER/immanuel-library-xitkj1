<?php
// File ini memproses hapus penulis, menerima nomor identitas dari tautan hapus pada daftar penulis
// Nomor identitas harus terbawa melalui alamat URL, bila kosong maka muncul pesan identitas tidak ditemukan
if (isset($_GET['id'])) {
  echo "Penulis dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID penulis tidak ditemukan.";
}
