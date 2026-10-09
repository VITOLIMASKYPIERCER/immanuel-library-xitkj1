<?php
// VITO: hapus penulis by id via query string.
// Dibuka via GET dari pages/authors/index.php tombol Hapus.
// Ambil id pakai get(), tampilkan pesan dengan e() agar aman.
require_once __DIR__ . '/../../repositories/helpers.php';
$id = get('id');
switch (true)
{
  case $id === null:
    echo 'ID penulis tidak ditemukan.';
    break;
  default:
    echo 'Penulis dengan id ' . e($id) . ' berhasil dihapus.';
}
