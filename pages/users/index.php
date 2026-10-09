<!-- VITO: daftar pengguna, tabel akun plus cari dan tambah -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/index.css">
</head>
<body>
  <?php
  // VITO: muat semua pengguna dari repo untuk tabel.
  // VITO: helpers dipakai untuk e() setiap cetak nama dan surel.
  require_once '../../repositories/user-repository.php';
  require_once '../../repositories/helpers.php';
  $koleksi = getUsers();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Manajemen Pengguna'; $pageSubtitle = 'Daftar seluruh pengguna beserta perannya (role)'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <!-- VITO: bilah alat berisi cari nama surel dan tambah pengguna -->
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama atau email pengguna...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Pengguna</a>
        </div>

        <div class="data-card">
          <!-- VITO: tabel akun berisi nama, surel, peran, dan aksi -->
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php // VITO: koleksi di-loop foreach jadi baris tabel ?>
              <?php foreach ($koleksi as $akun): ?>
              <tr>
                <td>
                  <div class="cell-primary">
                    <span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 19.5v-1a4.5 4.5 0 0 0-4.5-4.5h-5A4.5 4.5 0 0 0 5 18.5v1"/><circle cx="12" cy="7.5" r="4"/></svg></span>
                    <?= e($akun['nama']) ?>
                  </div>
                </td>
                <td><?= e($akun['surel']) ?></td>
                <td>
                  <?php if ($akun['peran'] === 'admin'): ?>
                    <span class="badge badge-admin">Admin</span>
                  <?php else: ?>
                    <span class="badge badge-member">Member</span>
                  <?php endif; ?>
                </td>
                <td>
                  <div class="cell-actions">
                    <a href="edit.php?id=<?= e($akun['id']) ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="../../actions/users/destroy.php?id=<?= e($akun['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pengguna ini?')">Hapus</a>
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
