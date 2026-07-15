<?php
$menu = "produk";
$judul = "Data Supplier";
include "../layout/header.php";
include "../layout/sidebar.php";

$supplier = mysqli_query($conn,"SELECT * FROM supplier");
?>

<h2>Tambah Produk</h2>

<div class="card shadow">

<div class="card-body">

<form action="simpan.php" method="POST">

<div class="mb-3">

<label>Nama Produk</label>

<input type="text"
name="nama_produk"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Supplier</label>

<select
name="id_supplier"
class="form-control"
required>

<option value="">-- Pilih Supplier --</option>

<?php
while($sp = mysqli_fetch_assoc($supplier)){
?>

<option value="<?= $sp['id_supplier']; ?>">

<?= $sp['nama_supplier']; ?>

</option>

<?php
}
?>

</select>

</div>

<div class="mb-3">

<label>Harga</label>

<input
type="number"
name="harga"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Stok</label>

<input
type="number"
name="stok"
class="form-control"
required>

</div>

<button class="btn btn-success">

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