<?php
// Data contoh akun dan profil dikumpulin di file ini, jadi halaman pengguna sama profil baca dari fungsi yang sama

// getUsers balikin 4 akun sekaligus, tiap orang ada id, nama, email, dan role admin/member. Dipakai di index pengguna buat di-loop
function getUsers() {
  return [
    ["id" => 1, "name" => "Admin Utama", "email" => "admin@ski.sch.id", "role" => "admin"],
    ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"],
    ["id" => 3, "name" => "Siti Aminah", "email" => "siti.aminah@siswa.ski.sch.id", "role" => "member"],
    ["id" => 4, "name" => "Richard Marcell", "email" => "richard.m@ski.sch.id", "role" => "admin"],
  ];
}

// getUser balikin satu akun (Budi Santoso, member). Dipakai di form edit pengguna dan halaman profil
function getUser() {
  return ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"];
}

// getProfile balikin data tambahan kayak phone, address, dan bio. Dipisah dari getUser biar form profil bagian bawah tetap keisi rapi
function getProfile() {
  return ["user_id" => 2, "phone" => "0812-3456-7890", "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat", "bio" => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri."];
}

