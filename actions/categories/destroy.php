<?php
// VITO: hapus kategori by id via query string.
// Dibuka via GET dari pages/categories/index.php tombol Hapus.
// Ambil id pakai get(), tampilkan pesan dengan e() agar aman.
require_once __DIR__ . '/../../repositories/helpers.php';
$id = get('id');
switch (true)
{
  case $id === null:
    echo 'ID kategori tidak ditemukan.';
    break;
  default:
    echo 'Kategori dengan id ' . e($id) . ' berhasil dihapus.';
}
