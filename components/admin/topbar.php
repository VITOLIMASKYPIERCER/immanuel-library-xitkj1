<!-- Bilah atas admin, dimuat bersama pada seluruh 14 halaman admin -->
<header class="app-topbar">
  <div class="page-title">
    <?php // Judul mengikuti $pageTitle dan $pageSubtitle dari halaman pemanggil, dengan nilai default kalau tidak diisi ?>
    <h1><?= isset($pageTitle) ? $pageTitle : 'Immanuel Library' ?></h1>
    <p><?= isset($pageSubtitle) ? $pageSubtitle : '' ?></p>
  </div>
  <div class="topbar-user">
    <!-- Profil pengguna di sudut kanan, menampilkan nama dan peran akun yang sedang masuk -->
    <span class="avatar">BS</span>
    <div>
      Budi Santoso<br>
      <span class="badge badge-member" style="margin-top:2px;">Member</span>
    </div>
  </div>
</header>
