<!-- Halaman tambah pengguna baru: form nama, email, kata sandi, dan peran ke actions/users/store.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/create.css">
</head>
<body>
  <div class="app-shell">
  <?php // Sidebar admin dimuat sebagai menu navigasi samping halaman ini ?>
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Tambah Pengguna'; $pageSubtitle = 'Buat akun pengguna baru beserta perannya'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- form bikin akun baru, lengkapin terus gas simpen -->
        <form method="POST" action="../../actions/users/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Contoh: Siti Aminah">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="nama@sekolah.sch.id">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Kata sandi awal">
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role">
                  <option value="member">Member</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="tambah_pengguna" class="btn btn-primary">Simpan Pengguna</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
