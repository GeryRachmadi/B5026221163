<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Mohammad Geresidi Rachmadi - 5026221163</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Blog</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Kumpulan Data
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/pegawai">Data Pegawai</a>
        <a class="dropdown-item" href="/nilaikuliah">Nilai Kuliah</a>
        <a class="dropdown-item" href="/keranjangbelanja">Keranjang Belanja</a>
        <a class="dropdown-item" href="/blueray">Blueray<a>
        <a class="dropdown-item" href="/combo">Kategori<a>
      </div>
    </li>
  </ul>
</nav>
<br>

<div class="container">
@yield('konten')
</div>

@include('footer')
</body>
</html>
