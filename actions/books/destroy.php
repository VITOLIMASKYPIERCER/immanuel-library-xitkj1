<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
