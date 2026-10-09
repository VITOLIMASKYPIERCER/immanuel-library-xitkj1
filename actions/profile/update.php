<?php
// VITO: terima form ubah profil saya.
// Dibuka hanya via POST dari pages/profile/edit.php.
// Tombol wajib: perbarui_profil. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['perbarui_profil']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['name' => post('name'), 'email' => post('email'), 'phone' => post('phone'), 'address' => post('address'), 'bio' => post('bio')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data profil tidak lengkap.';
        break;
      default:
        echo 'Perubahan profil berhasil diterima:<br>';
        print_r($data);
    }
}
