<?php
// VITO helpers: kumpulan fungsi kecil dipakai actions + pages.
// File ini wajib ada hanya di repo_vito sebagai pembeda jimmy/steven.
// Semua halaman admin + actions wajib require file ini.

// Ambil nilai dari POST dengan aman.
// $k adalah nama kolom form yang dicari.
// $d adalah nilai ganti bila kunci tidak ada.
// Mengembalikan isi $_POST[$k] atau $d.
function post($k, $d = null)
{
  return isset($_POST[$k]) ? $_POST[$k] : $d;
}

// Ambil nilai dari GET dengan aman.
// $k adalah nama parameter query yang dicari.
// $d adalah nilai ganti bila kunci tidak ada.
// Mengembalikan isi $_GET[$k] atau $d.
function get($k, $d = null)
{
  return isset($_GET[$k]) ? $_GET[$k] : $d;
}

// Escape output HTML agar aman dari XSS.
// $s adalah data apa pun yang mau dicetak.
// Mengembalikan string yang sudah di-escape.
// Selalu pakai e() setiap echo data dinamis.
function e($s)
{
  return htmlspecialchars((string) $s);
}
