<?php
// VITO: terima form tambah penulis.
// Dibuka hanya via POST dari pages/authors/create.php.
// Tombol wajib: simpan_penulis. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['simpan_penulis']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['name' => post('name'), 'bio' => post('bio')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data penulis tidak lengkap.';
        break;
      default:
        echo 'Penulis baru berhasil diterima:<br>';
        print_r($data);
    }
}
