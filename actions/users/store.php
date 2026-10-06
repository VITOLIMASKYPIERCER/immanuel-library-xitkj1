<?php
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Pengguna baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
