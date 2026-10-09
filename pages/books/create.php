<!-- VITO: tambah buku, isi judul ISBN tahun stok kategori deskripsi dan penulis -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/create.css">
</head>
<body>
  <?php
  // VITO: siapkan dropdown kategori dan checkbox penulis untuk form.
  // VITO: helpers dipakai untuk e() saat cetak opsi dan label.
  require_once '../../repositories/category-repository.php';
  require_once '../../repositories/author-repository.php';
  require_once '../../repositories/helpers.php';
  $koleksi = getCategories();
  $koleksiPenulis = getAuthors();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Tambah Buku'; $pageSubtitle = 'Lengkapi data buku, kategori, dan penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: form atas data buku, bawah pilih penulis, kirim ke store -->
        <form method="POST" action="../../actions/books/store.php">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" placeholder="Contoh: Laskar Pelangi">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="Contoh: 978-979-1227-78-0">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" placeholder="Contoh: 2005">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" placeholder="Contoh: 10">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php // VITO: daftar kategori di-loop jadi opsi dropdown ?>
                  <?php foreach ($koleksi as $kategori): ?>
                    <option value="<?= e($kategori['id']) ?>"><?= e($kategori['nama']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Sinopsis singkat buku"></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php // VITO: daftar penulis di-loop jadi checkbox banyak pilihan ?>
                <?php foreach ($koleksiPenulis as $penulis): ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= e($penulis['id']) ?>">
                    <?= e($penulis['nama']) ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="simpan_buku" class="btn btn-primary">Simpan Buku</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
