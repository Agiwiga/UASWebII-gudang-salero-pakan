<?php
$menu = "produk";
include "../layout/header.php";
include "../layout/sidebar.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id'");
$row = mysqli_fetch_assoc($data);

$supplier = mysqli_query($conn, "SELECT * FROM supplier");
?>

<h2>Edit Produk</h2>

<div class="card shadow">

    <div class="card-body">

        <form action="update.php" method="POST">

            <input type="hidden" name="id_produk" value="<?= $row['id_produk']; ?>">

            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text"
                    name="nama_produk"
                    class="form-control"
                    value="<?= $row['nama_produk']; ?>"
                    required>
            </div>

            <div class="mb-3">
                <label>Supplier</label>

                <select name="id_supplier" class="form-control" required>

                    <?php
                    while($sp = mysqli_fetch_assoc($supplier)){
                    ?>

                    <option value="<?= $sp['id_supplier']; ?>"
                        <?= ($sp['id_supplier'] == $row['id_supplier']) ? 'selected' : ''; ?>>

                        <?= $sp['nama_supplier']; ?>

                    </option>

                    <?php
                    }
                    ?>

                </select>

            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number"
                    name="harga"
                    class="form-control"
                    value="<?= $row['harga']; ?>"
                    required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number"
                    name="stok"
                    class="form-control"
                    value="<?= $row['stok']; ?>"
                    required>
            </div>

            <button class="btn btn-warning">
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