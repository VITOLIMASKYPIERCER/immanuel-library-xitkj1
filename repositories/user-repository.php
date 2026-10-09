<?php
// VITO: data akun + profil terpusat di file ini.
// Dipakai halaman pengguna dan profil saya.
// Kunci CAMPUR khas vito: id/nama/surel/peran.
// Sengaja tanpa require helpers agar beda dari actions/pages.

// Ambil semua pengguna untuk tabel manajemen.
// Tiap item berisi id, nama, surel, dan peran.
// Dipakai di pages/users/index.php lalu di-loop jadi baris tabel.
// Nilai teks sama persis agar HTML luar tidak berubah.
function getUsers()
{
  return [
    ["id" => 1, "nama" => "Admin Utama", "surel" => "admin@ski.sch.id", "peran" => "admin"],
    ["id" => 2, "nama" => "Budi Santoso", "surel" => "budi.santoso@siswa.ski.sch.id", "peran" => "member"],
    ["id" => 3, "nama" => "Siti Aminah", "surel" => "siti.aminah@siswa.ski.sch.id", "peran" => "member"],
    ["id" => 4, "nama" => "Richard Marcell", "surel" => "richard.m@ski.sch.id", "peran" => "admin"],
  ];
}

// Ambil satu pengguna by id untuk form edit + profil.
// Cari pakai foreach agar gaya vito beda dari jimmy/steven.
// Bila $id tidak ketemu, fallback ke Budi (id 2).
// Mengembalikan array id/nama/surel/peran.
function getUser($id = 2)
{
  $semua = getUsers();
  foreach ($semua as $akun)
  {
    if ($akun["id"] == $id)
    {
      return $akun;
    }
  }
  return $semua[1];
}

// Ambil biodata tambahan untuk halaman profil saya.
// Berisi phone, address, dan bio agar form bawah terisi.
// Dipisah dari getUser biar bagian akun dan profil jelas.
// Nilai teks sama persis agar HTML luar tidak berubah.
function getProfile()
{
  return ["user_id" => 2, "phone" => "0812-3456-7890", "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat", "bio" => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri."];
}
