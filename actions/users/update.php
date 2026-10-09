<?php
// VITO: terima form ubah pengguna.
// Dibuka hanya via POST dari pages/users/edit.php.
// Tombol wajib: perbarui_pengguna. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['perbarui_pengguna']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['id' => post('id'), 'name' => post('name'), 'email' => post('email'), 'role' => post('role')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data pengguna tidak lengkap.';
        break;
      default:
        echo 'Perubahan pengguna berhasil diterima:<br>';
        print_r($data);
    }
}
