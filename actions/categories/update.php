<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
if (isset($_POST['id'], $_POST['name'], $_POST['description'])) {
  echo "Perubahan kategori berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
