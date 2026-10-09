<!-- VITO: ubah pengguna, form terisi ke update -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/edit.css">
</head>
<body>
  <?php
  // VITO: muat satu pengguna by id untuk mengisi form edit.
  // VITO: helpers dipakai untuk e() dan get() id dari query.
  require_once '../../repositories/user-repository.php';
  require_once '../../repositories/helpers.php';
  $akun = getUser(get('id', 2));
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Edit Pengguna'; $pageSubtitle = 'Perbarui data dan role pengguna'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: form bawa id tersembunyi, tombol batal dan simpan perubahan -->
        <form method="POST" action="../../actions/users/update.php">
          <input type="hidden" name="id" value="<?= e($akun['id']) ?>">
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="<?= e($akun['nama']) ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= e($akun['surel']) ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select id="role" name="role">
                <option value="member" <?= $akun['peran'] === 'member' ? 'selected' : '' ?>>Member</option>
                <option value="admin" <?= $akun['peran'] === 'admin' ? 'selected' : '' ?>>Admin</option>
              </select>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="perbarui_pengguna" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
