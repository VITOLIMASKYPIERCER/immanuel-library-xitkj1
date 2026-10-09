<?php
// VITO: terima form tambah buku.
// Dibuka hanya via POST dari pages/books/create.php.
// Tombol wajib: simpan_buku. Selain itu tolak sebagai akses tidak valid.
require_once __DIR__ . '/../../repositories/helpers.php';
switch (true)
{
  case $_SERVER['REQUEST_METHOD'] !== 'POST':
  case !isset($_POST['simpan_buku']):
    echo 'Akses tidak valid.';
    break;
  default:
    $data = ['title' => post('title'), 'isbn' => post('isbn'), 'year' => post('year'), 'stock' => post('stock'), 'category_id' => post('category_id'), 'description' => post('description'), 'author_ids' => post('author_ids')];
    switch (true)
    {
      case in_array(null, $data, true):
        echo 'Data buku tidak lengkap.';
        break;
      default:
        echo 'Buku baru berhasil diterima:<br>';
        print_r($data);
    }
}
