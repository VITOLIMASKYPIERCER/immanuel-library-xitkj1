<!-- VITO: navigasi publik atas, tampil di semua halaman landing -->
<!-- Letak file: components/landing/header.php, dimuat paling atas body -->
<header>
  <nav class="navbar">
    <a href="/index.php" class="brand">
      <span class="logo-badge">PD</span>
      Perpustakaan Digital
    </a>
    <div class="nav-links">
      <a href="/index.php" class="active">Beranda</a>
      <a href="/pages/books/index.php">Katalog Buku</a>
      <a href="/pages/authors/index.php">Penulis</a>
    </div>
    <div class="nav-actions">
      <!-- VITO: tombol kanan untuk masuk dan daftar akun baru -->
      <a href="/pages/auth/login.php" class="btn btn-outline btn-sm">Masuk</a>
      <a href="/pages/auth/register.php" class="btn btn-primary btn-sm">Daftar</a>
    </div>
  </nav>
</header>
