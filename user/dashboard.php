<?php

include "layout/header.php";
include "layout/sidebar.php";

$totalProduk = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM produk"));
$totalLaporan = mysqli_fetch_assoc(mysqli_query($conn,"
SELECT COUNT(*) AS total
FROM laporan
WHERE id_user='".$_SESSION['id_user']."'
"));

?>

<h2>Dashboard User</h2>

<p>
Selamat datang,
<strong><?= $_SESSION['nama']; ?></strong>
</p>

<div class="row">

    <div class="col-md-4">

        <div class="card shadow">

            <div class="card-body">

                <h5>Total Produk</h5>

                <h2><?= $totalProduk['total']; ?></h2>

            </div>

        </div>

    </div>

</div>

<div class="col-md-4">

    <div class="card shadow">

        <div class="card-body">

            <h5>Laporan Saya</h5>

            <h2><?= $totalLaporan['total']; ?></h2>

        </div>

    </div>

</div>

<?php
include "layout/footer.php";
?>