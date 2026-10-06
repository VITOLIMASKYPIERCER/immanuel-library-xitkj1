<?php
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) {
  echo "Perubahan pengguna berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
