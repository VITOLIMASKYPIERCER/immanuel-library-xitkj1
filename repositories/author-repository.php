<?php
// VITO: data penulis terpusat di file ini.
// Dipakai tabel penulis + checkbox form buku.
// Kunci CAMPUR khas vito: id/nama/bio (+jml_buku untuk angka tabel).
// Sengaja tanpa require helpers agar beda dari actions/pages.

// Ambil semua penulis untuk tabel + checkbox.
// Tiap item berisi id, nama, bio, dan jml_buku.
// Dipakai di pages/authors/index.php dan pages/books/create.php + edit.php.
// Angka jml_buku sama persis agar HTML luar tidak berubah.
function getAuthors()
{
  return [
    ["id" => 1, "nama" => "Andrea Hirata", "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.", "jml_buku" => 1],
    ["id" => 2, "nama" => "Tere Liye", "bio" => "Penulis produktif novel Indonesia.", "jml_buku" => 1],
    ["id" => 3, "nama" => "J.K. Rowling", "bio" => "Penulis seri Harry Potter.", "jml_buku" => 1],
    ["id" => 4, "nama" => "Pramoedya Ananta Toer", "bio" => "Sastrawan besar Indonesia.", "jml_buku" => 2],
    ["id" => 5, "nama" => "Sapardi Djoko Damono", "bio" => "Penyair Indonesia.", "jml_buku" => 1],
  ];
}

// Ambil satu penulis by id untuk form edit.
// Cari pakai foreach agar gaya vito beda dari jimmy/steven.
// Bila $id tidak ketemu, fallback ke penulis pertama.
// Mengembalikan array id/nama/bio/jml_buku.
function getAuthor($id = 1)
{
  $semua = getAuthors();
  foreach ($semua as $penulis)
  {
    if ($penulis["id"] == $id)
    {
      return $penulis;
    }
  }
  return $semua[0];
}
