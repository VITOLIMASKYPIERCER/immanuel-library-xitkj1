<!-- VITO: bilah atas admin, judul ikut $pageTitle/$pageSubtitle halaman pemanggil -->
<!-- Letak file: components/admin/topbar.php, dimuat di dalam .app-main -->
<header class="app-topbar">
  <div class="page-title">
    <?php // VITO: judul dinamis dari halaman pemanggil, default bila tidak diisi ?>
    <h1><?= isset($pageTitle) ? e($pageTitle) : 'Immanuel Library' ?></h1>
    <p><?= isset($pageSubtitle) ? e($pageSubtitle) : '' ?></p>
  </div>
  <div class="topbar-user">
    <!-- VITO: info akun masuk di kanan atas, nama dan peran tetap sama -->
    <span class="avatar">BS</span>
    <div>
      Budi Santoso<br>
      <span class="badge badge-member" style="margin-top:2px;">Member</span>
    </div>
  </div>
</header>
