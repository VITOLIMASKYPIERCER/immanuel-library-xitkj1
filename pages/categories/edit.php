<!-- VITO: ubah kategori, form terisi ke update -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/edit.css">
</head>
<body>
  <?php
  // VITO: muat satu kategori by id untuk mengisi form edit.
  // VITO: helpers dipakai untuk e() dan get() id dari query.
  require_once '../../repositories/category-repository.php';
  require_once '../../repositories/helpers.php';
  $kategori = getCategory(get('id', 1));
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Edit Kategori'; $pageSubtitle = 'Perbarui data kategori'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: form bawa id tersembunyi, tombol batal dan simpan perubahan -->
        <form method="POST" action="../../actions/categories/update.php">
          <input type="hidden" name="id" value="<?= e($kategori['id']) ?>">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" value="<?= e($kategori['nama']) ?>">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= e($kategori['deskripsi']) ?></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="perbarui_kategori" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
