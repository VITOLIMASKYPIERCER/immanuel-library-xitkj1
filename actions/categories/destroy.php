<?php
if (isset($_GET['id'])) {
  echo "Kategori dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID kategori tidak ditemukan.";
}
