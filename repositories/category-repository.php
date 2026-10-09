<?php
// VITO: data kategori terpusat di file ini.
// Dipakai tabel kategori + dropdown form buku.
// Kunci CAMPUR khas vito: id/nama/deskripsi (+jml_buku untuk angka tabel).
// Sengaja tanpa require helpers agar beda dari actions/pages.

// Ambil semua kategori untuk tabel + dropdown.
// Tiap item berisi id, nama, deskripsi, dan jml_buku.
// Dipakai di pages/categories/index.php dan pages/books/create.php + edit.php.
// Nilai angka/teks sama persis agar HTML luar tidak berubah.
function getCategories()
{
  return [
    ["id" => 1, "nama" => "Fiksi", "deskripsi" => "Novel dan cerita rekaan", "jml_buku" => 3],
    ["id" => 2, "nama" => "Sains", "deskripsi" => "Buku ilmu pengetahuan alam", "jml_buku" => 0],
    ["id" => 3, "nama" => "Sejarah", "deskripsi" => "Buku sejarah dan biografi", "jml_buku" => 1],
    ["id" => 4, "nama" => "Teknologi", "deskripsi" => "Buku pemrograman dan teknologi", "jml_buku" => 0],
  ];
}

// Ambil satu kategori by id untuk form edit.
// Cari pakai foreach agar gaya vito beda dari jimmy/steven.
// Bila $id tidak ketemu, fallback ke kategori pertama.
// Mengembalikan array id/nama/deskripsi/jml_buku.
function getCategory($id = 1)
{
  $semua = getCategories();
  foreach ($semua as $kat)
  {
    if ($kat["id"] == $id)
    {
      return $kat;
    }
  }
  return $semua[0];
}
