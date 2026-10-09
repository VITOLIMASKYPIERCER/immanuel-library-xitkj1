<!-- Halaman tambah penulis baru: form nama dan biografi yang dikirim ke actions/authors/store.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/create.css">
</head>
<body>
  <div class="app-shell">
  <?php // Sidebar admin dimuat sebagai menu navigasi samping halaman ini ?>
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Tambah Penulis'; $pageSubtitle = 'Daftarkan penulis baru ke sistem'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- form nambah penulis, isi nama sama bio terus simpen -->
        <form method="POST" action="../../actions/authors/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Tere Liye">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3" placeholder="Biografi singkat penulis"></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="tambah_penulis" class="btn btn-primary">Simpan Penulis</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
