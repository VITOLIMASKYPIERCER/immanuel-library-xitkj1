<?php
if (isset($_GET['id'])) {
  echo "Pengguna dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
