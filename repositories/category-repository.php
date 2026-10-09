<?php
// Data contoh kategori ada di file ini, jadi tabel kategori sama dropdown di form buku ambilnya dari satu tempat

// getCategories balikin 4 kategori sekaligus, tiap item ada id, nama, deskripsi, dan total_books. Dipakai di index buat tabel dan di form buku buat dropdown
function getCategories() {
  return [
    ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3],
    ["id" => 2, "name" => "Sains", "description" => "Buku ilmu pengetahuan alam", "total_books" => 0],
    ["id" => 3, "name" => "Sejarah", "description" => "Buku sejarah dan biografi", "total_books" => 1],
    ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
  ];
}

// getCategory balikin satu kategori (Fiksi) biar form edit langsung keisi. Sengaja tanpa parameter biar gampang dipanggil
function getCategory() {
  return ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3];
}

