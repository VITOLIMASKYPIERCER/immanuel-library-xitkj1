<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
if (isset($_POST['id'], $_POST['name'], $_POST['bio'])) {
  echo "Perubahan penulis berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
