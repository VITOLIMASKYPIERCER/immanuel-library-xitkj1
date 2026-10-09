<?php
// VITO: terima form ubah kategori.
// Dibuka hanya via POST dari pages/categories/edit.php.
// Tombol wajib: perbarui_kategori. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['perbarui_kategori']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['id' => post('id'), 'name' => post('name'), 'description' => post('description')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data kategori tidak lengkap.';
        break;
      default:
        echo 'Perubahan kategori berhasil diterima:<br>';
        print_r($data);
    }
}
