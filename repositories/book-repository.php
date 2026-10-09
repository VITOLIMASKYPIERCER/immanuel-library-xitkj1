<?php
// VITO: data buku terpusat di file ini.
// Semua halaman buku (index/show/edit) baca dari sini.
// Kunci CAMPUR khas vito: id/nama/kat/thn/stok/pengarang/isbn/deskripsi/kat_id/pengarang_id.
// File ini sengaja tanpa require helpers agar beda dari actions/pages.

// Ambil semua buku untuk tabel katalog.
// Tiap item berisi id, nama, kat, thn, stok, dan pengarang.
// Dipakai di pages/books/index.php lalu di-loop jadi baris tabel.
// Nilai angka/teks sama persis agar HTML luar tidak berubah.
function getBooks()
{
  return [
    ["id" => 1, "nama" => "Laskar Pelangi", "kat" => "Fiksi", "thn" => 2005, "stok" => 12, "pengarang" => ["Andrea Hirata"]],
    ["id" => 2, "nama" => "Bumi", "kat" => "Fiksi", "thn" => 2014, "stok" => 8, "pengarang" => ["Tere Liye"]],
    ["id" => 3, "nama" => "Harry Potter dan Batu Bertuah", "kat" => "Fiksi", "thn" => 1997, "stok" => 5, "pengarang" => ["J.K. Rowling"]],
    ["id" => 4, "nama" => "Bumi Manusia", "kat" => "Sejarah", "thn" => 1980, "stok" => 6, "pengarang" => ["Pramoedya Ananta Toer"]],
    ["id" => 5, "nama" => "Antologi Rasa Nusantara", "kat" => "Fiksi", "thn" => 2021, "stok" => 4, "pengarang" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"]],
  ];
}

// Ambil satu buku lengkap by id untuk show/edit.
// Cari pakai foreach agar gaya vito beda dari jimmy/steven.
// Bila $id tidak ketemu, fallback ke Antologi (id 5).
// Detail berisi isbn, deskripsi, kat_id, dan pengarang_id.
function getBook($id = 5)
{
  $semua = [
    ["id" => 1, "nama" => "Laskar Pelangi", "isbn" => "978-979-1227-78-0", "thn" => 2005, "stok" => 12, "kat" => "Fiksi", "kat_id" => 1, "deskripsi" => "Kisah anak-anak Belitung yang berjuang demi pendidikan.", "pengarang" => ["Andrea Hirata"], "pengarang_id" => [1]],
    ["id" => 2, "nama" => "Bumi", "isbn" => "978-602-0332-11-7", "thn" => 2014, "stok" => 8, "kat" => "Fiksi", "kat_id" => 1, "deskripsi" => "Petualangan Raib dengan kekuatan misteriusnya.", "pengarang" => ["Tere Liye"], "pengarang_id" => [2]],
    ["id" => 3, "nama" => "Harry Potter dan Batu Bertuah", "isbn" => "978-0747532699", "thn" => 1997, "stok" => 5, "kat" => "Fiksi", "kat_id" => 1, "deskripsi" => "Awal kisah Harry di sekolah sihir Hogwarts.", "pengarang" => ["J.K. Rowling"], "pengarang_id" => [3]],
    ["id" => 4, "nama" => "Bumi Manusia", "isbn" => "978-979-97312-3-4", "thn" => 1980, "stok" => 6, "kat" => "Sejarah", "kat_id" => 3, "deskripsi" => "Kisah Minke di era kolonial Hindia Belanda.", "pengarang" => ["Pramoedya Ananta Toer"], "pengarang_id" => [4]],
    ["id" => 5, "nama" => "Antologi Rasa Nusantara", "isbn" => "978-602-1234-56-7", "thn" => 2021, "stok" => 4, "kat" => "Fiksi", "kat_id" => 1, "deskripsi" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.", "pengarang" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"], "pengarang_id" => [4, 5]],
  ];
  foreach ($semua as $buku)
  {
    if ($buku["id"] == $id)
    {
      return $buku;
    }
  }
  return $semua[4];
}
