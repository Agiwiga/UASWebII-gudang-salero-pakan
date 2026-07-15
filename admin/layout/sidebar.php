<div class="wrapper">

<aside class="sidebar">

<h3 class="text-center mb-4">
    Salero Pakan
</h3>

    <a class="<?= ($menu=="dashboard") ? "active" : ""; ?>"
    href="<?= BASE_URL ?>admin/dashboard.php">

    <i class="bi bi-speedometer2"></i>
    Dashboard

</a>

<a class="<?= ($menu=="supplier") ? "active" : ""; ?>"
    href="<?= BASE_URL ?>admin/supplier/index.php">
    <i class="bi bi-truck"></i>
    Supplier
</a>

<a class="<?= ($menu=="produk") ? "active" : ""; ?>"
    href="<?= BASE_URL ?>admin/produk/index.php">
    <i class="bi bi-box-seam"></i>
    Produk
</a>

<a class="<?= ($menu=="laporan") ? "active" : ""; ?>"
href="<?= BASE_URL ?>admin/laporan/index.php">

<i class="bi bi-file-earmark-text"></i>

Laporan

</a>

<hr>

<a class="logout"
href="<?= BASE_URL ?>logout.php">

<i class="bi bi-box-arrow-right"></i>
Logout

</a>

</aside>

<main class="content">

<nav class="navbar navbar-expand-lg bg-white rounded shadow-sm mb-4">

<div class="container-fluid">

<h5 class="mb-0">
    <?= $judul; ?>
</h5>

<span>

Halo,

<strong><?= $_SESSION['nama']; ?></strong>

</span>

</div>

</nav>