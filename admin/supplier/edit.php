<?php
$menu = "supplier";
include "../layout/header.php";
include "../layout/sidebar.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM supplier WHERE id_supplier='$id'");
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Supplier</h2>

<div class="card shadow">
    <div class="card-body">

        <form action="update.php" method="POST">

            <input type="hidden" name="id_supplier" value="<?= $row['id_supplier']; ?>">

            <div class="mb-3">
                <label>Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control"
                    value="<?= $row['nama_supplier']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required><?= $row['alamat']; ?></textarea>
            </div>

            <div class="mb-3">
                <label>No. Telepon</label>
                <input type="text" name="telepon" class="form-control"
                    value="<?= $row['telepon']; ?>" required>
            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="index.php" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

<?php
include "../layout/footer.php";
?>