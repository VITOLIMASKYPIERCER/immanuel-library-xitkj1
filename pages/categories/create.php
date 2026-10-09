<!-- VITO: tambah kategori, form nama dan deskripsi ke store -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/create.css">
</head>
<body>
  <?php // VITO: helpers untuk e() di topbar ?>
  <?php require_once '../../repositories/helpers.php'; ?>
  <div class="app-shell">
  <?php // VITO: menu samping admin untuk halaman tambah kategori ?>
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Tambah Kategori'; $pageSubtitle = 'Buat kategori baru untuk mengelompokkan buku'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: form kirim ke store, tombol batal dan simpan kategori -->
        <form method="POST" action="../../actions/categories/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Fiksi">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Deskripsi singkat kategori"></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="simpan_kategori" class="btn btn-primary">Simpan Kategori</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
