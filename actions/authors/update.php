<?php
// VITO: terima form ubah penulis.
// Dibuka hanya via POST dari pages/authors/edit.php.
// Tombol wajib: perbarui_penulis. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['perbarui_penulis']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['id' => post('id'), 'name' => post('name'), 'bio' => post('bio')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data penulis tidak lengkap.';
        break;
      default:
        echo 'Perubahan penulis berhasil diterima:<br>';
        print_r($data);
    }
}
