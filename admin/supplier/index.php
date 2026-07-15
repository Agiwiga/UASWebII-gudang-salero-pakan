<?php
$menu = "supplier";
$judul = "Data Supplier";
include "../layout/header.php";
include "../layout/sidebar.php";

$data = mysqli_query($conn, "SELECT * FROM supplier ORDER BY id_supplier DESC");
?>

<h2>Data Supplier</h2>

<a href="tambah.php" class="btn btn-success mb-3">
    <i class="bi bi-plus-circle"></i> Tambah Supplier
</a>

<table class="table table-bordered table-hover">
    <thead class="table-success">
        <tr>
            <th width="60">No</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php
    $no = 1;

    while($row = mysqli_fetch_assoc($data)){
    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $row['nama_supplier']; ?></td>

        <td><?= $row['alamat']; ?></td>

        <td><?= $row['telepon']; ?></td>

        <td>

            <a href="edit.php?id=<?= $row['id_supplier']; ?>" class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="hapus.php?id=<?= $row['id_supplier']; ?>"
            onclick="return confirm('Yakin ingin menghapus data?')"
            class="btn btn-danger btn-sm">
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