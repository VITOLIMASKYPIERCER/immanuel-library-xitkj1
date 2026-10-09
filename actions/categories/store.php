<?php
// VITO: terima form tambah kategori.
// Dibuka hanya via POST dari pages/categories/create.php.
// Tombol wajib: simpan_kategori. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['simpan_kategori']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['name' => post('name'), 'description' => post('description')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data kategori tidak lengkap.';
        break;
      default:
        echo 'Kategori baru berhasil diterima:<br>';
        print_r($data);
    }
}
