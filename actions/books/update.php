<?php
// VITO: terima form ubah buku.
// Dibuka hanya via POST dari pages/books/edit.php.
// Tombol wajib: perbarui_buku. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['perbarui_buku']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['id' => post('id'), 'title' => post('title'), 'isbn' => post('isbn'), 'year' => post('year'), 'stock' => post('stock'), 'category_id' => post('category_id'), 'description' => post('description'), 'author_ids' => post('author_ids')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data buku tidak lengkap.';
        break;
      default:
        echo 'Perubahan buku berhasil diterima:<br>';
        print_r($data);
    }
}
