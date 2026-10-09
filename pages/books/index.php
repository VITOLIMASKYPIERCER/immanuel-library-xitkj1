<!-- VITO: kelola buku, tabel koleksi plus cari, filter, dan tambah -->
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/index.css">
</head>

<body>
  <?php
  // VITO: muat data buku dari repo lalu siapkan untuk tabel.
  // VITO: helpers dipakai untuk e() saat cetak nama dan kategori.
  require_once '../../repositories/book-repository.php';
  require_once '../../repositories/helpers.php';
  require_once '../../components/admin/book-row.php';
  $koleksi = getBooks();
  ?>
  <div class="app-shell">
    <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php $pageTitle = 'Manajemen Buku'; $pageSubtitle = 'Kelola data buku, kategori, dan penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: bilah alat berisi cari judul, filter kategori, dan tambah buku -->
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="7" />
                <path d="m21 21-4.3-4.3" />
              </svg>
              <input type="text" name="search" class="search-input" placeholder="Cari judul buku...">
            </div>
            <select name="category" class="filter-select">
              <option value="">Semua Kategori</option>
              <option value="Fiksi">Fiksi</option>
              <option value="Sains">Sains</option>
              <option value="Sejarah">Sejarah</option>
              <option value="Teknologi">Teknologi</option>
            </select>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Buku</a>
        </div>

        <div class="data-card">
          <!-- VITO: tabel buku berisi judul, kategori, penulis, stok, dan aksi -->
          <table class="data-table">
            <thead>
              <tr>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php // VITO: tiap buku dicetak lewat renderBookRow agar baris konsisten ?>
              <?php foreach ($koleksi as $buku): ?>
              <?= renderBookRow($buku) ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="pagination">
          <span class="pagination-btn is-disabled">&lt;</span>
          <span class="pagination-btn is-disabled">&gt;</span>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
