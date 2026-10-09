<!-- VITO: daftar kategori, tabel plus cari dan tambah -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/index.css">
</head>
<body>
  <?php
  // VITO: muat semua kategori dari repo untuk tabel.
  // VITO: helpers dipakai untuk e() setiap cetak nama dan angka.
  require_once '../../repositories/category-repository.php';
  require_once '../../repositories/helpers.php';
  $koleksi = getCategories();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Manajemen Kategori'; $pageSubtitle = 'Kelola kategori untuk mengelompokkan buku'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: bilah alat berisi cari nama dan tambah kategori -->
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama kategori...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Kategori</a>
        </div>

        <div class="data-card">
          <!-- VITO: tabel kategori berisi nama, deskripsi, jumlah, dan aksi -->
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php // VITO: koleksi di-loop foreach jadi baris tabel ?>
              <?php foreach ($koleksi as $kategori): ?>
              <tr>
                <td>
                  <div class="cell-primary">
                    <span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg></span>
                    <?= e($kategori['nama']) ?>
                  </div>
                </td>
                <td><?= e($kategori['deskripsi']) ?></td>
                <td><span class="badge badge-muted"><?= e($kategori['jml_buku']) ?> buku</span></td>
                <td>
                  <div class="cell-actions">
                    <a href="edit.php?id=<?= e($kategori['id']) ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="../../actions/categories/destroy.php?id=<?= e($kategori['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus kategori ini?')">Hapus</a>
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
