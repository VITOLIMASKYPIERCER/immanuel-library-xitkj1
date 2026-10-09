<!-- VITO: daftar penulis, tabel plus cari dan tambah -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/index.css">
</head>
<body>
  <?php
  // VITO: muat semua penulis dari repo untuk tabel.
  // VITO: helpers dipakai untuk e() setiap cetak nama dan angka.
  require_once '../../repositories/author-repository.php';
  require_once '../../repositories/helpers.php';
  $koleksi = getAuthors();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>
    <main class="app-main">
    <?php $pageTitle = 'Manajemen Penulis'; $pageSubtitle = 'Kelola data penulis yang terdaftar di sistem'; require '../../components/admin/topbar.php'; ?>
      <div class="app-content">
        <!-- VITO: bilah alat berisi cari nama dan tambah penulis -->
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama penulis...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Penulis</a>
        </div>
        <div class="data-card">
          <!-- VITO: tabel penulis berisi nama, jumlah buku, dan aksi -->
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama Penulis</th>
                <th>Jumlah Buku Ditulis</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php // VITO: koleksi di-loop foreach jadi baris tabel ?>
              <?php foreach ($koleksi as $penulis): ?>
              <tr>
                <td>
                  <div class="cell-primary">
                    <span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg></span>
                    <?= e($penulis['nama']) ?>
                  </div>
                </td>
                <td><span class="badge badge-muted"><?= e($penulis['jml_buku']) ?> buku</span></td>
                <td>
                  <div class="cell-actions">
                    <a href="edit.php?id=<?= e($penulis['id']) ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="../../actions/authors/destroy.php?id=<?= e($penulis['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus penulis ini?')">Hapus</a>
                  </div>
                </td>
              </tr>
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
