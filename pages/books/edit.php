<!-- VITO: ubah buku, form terisi lalu simpan via update -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
  <?php
  // VITO: muat satu buku by id untuk mengisi form edit.
  // VITO: helpers dipakai untuk e() dan get() id dari query.
  require_once '../../repositories/book-repository.php';
  require_once '../../repositories/category-repository.php';
  require_once '../../repositories/author-repository.php';
  require_once '../../repositories/helpers.php';
  $buku = getBook(get('id', 5));
  $koleksi = getCategories();
  $koleksiPenulis = getAuthors();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Edit Buku'; $pageSubtitle = 'Perbarui data buku, kategori, dan penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: form bawa id tersembunyi, tombol batal dan simpan perubahan -->
        <form method="POST" action="../../actions/books/update.php">
          <input type="hidden" name="id" value="<?= e($buku['id']) ?>">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" value="<?= e($buku['nama']) ?>">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="<?= e($buku['isbn']) ?>">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" value="<?= e($buku['thn']) ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" value="<?= e($buku['stok']) ?>">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php // VITO: opsi kategori dengan selected ikut buku ?>
                  <?php foreach ($koleksi as $kategori): ?>
                    <option value="<?= e($kategori['id']) ?>" <?= $kategori['id'] == $buku['kat_id'] ? 'selected' : '' ?>><?= e($kategori['nama']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= e($buku['deskripsi']) ?></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php // VITO: checkbox penulis dengan checked ikut buku ?>
                <?php foreach ($koleksiPenulis as $penulis): ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= e($penulis['id']) ?>" <?= in_array($penulis['id'], $buku['pengarang_id']) ? 'checked' : '' ?>>
                    <?= e($penulis['nama']) ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="perbarui_buku" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
