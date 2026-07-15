<?php
$menu = "produk";
$judul = "Data Produk";
include "../layout/header.php";
include "../layout/sidebar.php";

$cari = "";

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
}

$query = mysqli_query($conn,"
SELECT produk.*, supplier.nama_supplier
FROM produk
JOIN supplier
ON produk.id_supplier = supplier.id_supplier
WHERE produk.nama_produk LIKE '%$cari%'
ORDER BY produk.id_produk DESC
");
?>

<h2>Data Produk</h2>
<div class="row mb-3">

    <div class="col-md-6">

            <form method="GET">

            <div class="input-group">

            <input
            type="text"
            name="cari"
            class="form-control"
            placeholder="Cari nama produk..."
            value="<?= $cari ?>">

            <button class="btn btn-success">

            Cari

            </button>

            <a href="index.php" class="btn btn-secondary">

            Reset

            </a>

            </div>

            </form>

    </div>

</div>


<a href="tambah.php" class="btn btn-success mb-3">
    <i class="bi bi-plus-circle"></i> Tambah Produk
</a>

<table class="table table-bordered table-hover">

    <thead class="table-success">

        <tr>

            <th width="60">No</th>
            <th>Nama Produk</th>
            <th>Supplier</th>
            <th>Harga</th>
            <th>Stok</th>
            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

    <?php

    $no = 1;

    while($row = mysqli_fetch_assoc($query)){

    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $row['nama_produk']; ?></td>

        <td><?= $row['nama_supplier']; ?></td>

        <td>Rp <?= number_format($row['harga'],0,',','.'); ?></td>

        <td><?= $row['stok']; ?></td>

        <td>

            <a href="edit.php?id=<?= $row['id_produk']; ?>" class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="hapus.php?id=<?= $row['id_produk']; ?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin ingin menghapus produk?')">
                Hapus
            </a>

        </td>

    </tr>

    <?php
    }
    ?>

    </tbody>

</table>

<?php
include "../layout/footer.php";
?>
