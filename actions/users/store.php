<?php
// VITO: terima form tambah pengguna.
// Dibuka hanya via POST dari pages/users/create.php.
// Tombol wajib: simpan_pengguna. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['simpan_pengguna']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['name' => post('name'), 'email' => post('email'), 'password' => post('password'), 'role' => post('role')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data pengguna tidak lengkap.';
        break;
      default:
        echo 'Pengguna baru berhasil diterima:<br>';
        print_r($data);
    }
}
