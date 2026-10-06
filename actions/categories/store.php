<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
if (isset($_POST['name'], $_POST['description'])) {
  echo "Kategori baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
