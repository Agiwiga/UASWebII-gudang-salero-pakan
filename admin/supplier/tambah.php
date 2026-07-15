<?php
$menu = "supplier";
$judul = "Tambah Supplier";
include "../layout/header.php";
include "../layout/sidebar.php";
?>

<h2>Tambah Supplier</h2>

<div class="card shadow">
    <div class="card-body">

        <form action="simpan.php" method="POST">

            <div class="mb-3">
                <label>Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label>No. Telepon</label>
                <input type="text" name="telepon" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">
                Simpan
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