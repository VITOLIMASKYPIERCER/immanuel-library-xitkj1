<!-- VITO: ubah penulis, form terisi ke update -->
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>

<body>
  <?php
  // VITO: muat satu penulis by id untuk mengisi form edit.
  // VITO: helpers dipakai untuk e() dan get() id dari query.
  require_once '../../repositories/author-repository.php';
  require_once '../../repositories/helpers.php';
  $penulis = getAuthor(get('id', 1));
  ?>
  <div class="app-shell">
    <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php $pageTitle = 'Edit Penulis'; $pageSubtitle = 'Perbarui data penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: form bawa id tersembunyi, tombol batal dan simpan perubahan -->
        <form method="POST" action="../../actions/authors/update.php">
          <input type="hidden" name="id" value="<?= e($penulis['id']) ?>">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" value="<?= e($penulis['nama']) ?>">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= e($penulis['bio']) ?></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="perbarui_penulis" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
