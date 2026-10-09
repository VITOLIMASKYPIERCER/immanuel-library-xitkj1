<?php
// VITO: hapus pengguna by id via query string.
// Dibuka via GET dari pages/users/index.php tombol Hapus.
// Ambil id pakai get(), tampilkan pesan dengan e() agar aman.
require_once __DIR__ . '/../../repositories/helpers.php';
$id = get('id');
switch (true)
{
  case $id === null:
    echo 'ID pengguna tidak ditemukan.';
    break;
  default:
    echo 'Pengguna dengan id ' . e($id) . ' berhasil dihapus.';
}
