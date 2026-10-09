<?php
// VITO: partial baris buku khusus repo_vito.
// Berisi helper renderBookRow($buku) yang dipanggil pages/books/index.php.
// Pembeda dari jimmy/steven yang tidak punya file ini.
// Output <tr> sama persis agar tampilan tabel tidak berubah.
require_once __DIR__ . '/../../repositories/helpers.php';
function renderBookRow($buku)
{
  $chips = implode('', array_map(fn($a) => '<span class="chip">' . e($a) . '</span>', (array) $buku['pengarang']));
  return '<tr><td><div class="cell-primary"><span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" /><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z" /></svg></span><a href="show.php?id=' . e($buku['id']) . '" style="color:inherit;">' . e($buku['nama']) . '</a></div></td><td><span class="badge badge-muted">' . e($buku['kat']) . '</span></td><td><div class="chip-list">' . $chips . '</div></td><td>' . e($buku['stok']) . '</td><td><div class="cell-actions"><a href="edit.php?id=' . e($buku['id']) . '" class="btn btn-outline btn-sm">Edit</a><a href="../../actions/books/destroy.php?id=' . e($buku['id']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Hapus buku ini?\')">Hapus</a></div></td></tr>';
}
