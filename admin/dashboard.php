<?php

$menu = "dashboard";
$judul = "Dashboard";
include "layout/header.php";
include "layout/sidebar.php";
include "layout/header.php";

$totalProduk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM produk"));

$totalSupplier = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM supplier"));

$totalStok = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(stok) AS total FROM produk"));

$stokMenipis = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM produk WHERE stok < 10"));


?>

<h2 class="mb-4">
    Dashboard Admin
</h2>

<p>
    Selamat datang,
    <strong><?= $_SESSION['nama']; ?></strong>
</p>

<div class="row">

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body">

                <h6>Total Produk</h6>

                <h2><?= $totalProduk['total']; ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body">

                <h6>Total Supplier</h6>

                <h2><?= $totalSupplier['total']; ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body">

                <h6>Total Stok</h6>

                <h2><?= $totalStok['total']; ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body">

                <h6>Stok Menipis</h6>

                <h2><?= $stokMenipis['total']; ?></h2>

            </div>

        </div>

    </div>

</div>

<?php
include "layout/footer.php";
?>