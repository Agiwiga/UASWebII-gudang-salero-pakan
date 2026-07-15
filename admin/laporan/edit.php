<?php

$menu = "laporan";
$judul = "Ubah Status";

include "../layout/header.php";
include "../layout/sidebar.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"
SELECT laporan.*, user.nama
FROM laporan
JOIN user
ON laporan.id_user=user.id_user
WHERE id_laporan='$id'
");

$row = mysqli_fetch_assoc($data);

?>

<h2>Ubah Status Laporan</h2>

<div class="card shadow">

<div class="card-body">

<form action="update.php" method="POST">

<input
type="hidden"
name="id_laporan"
value="<?= $row['id_laporan']; ?>">

<div class="mb-3">

<label>Nama User</label>

<input
type="text"
class="form-control"
value="<?= $row['nama']; ?>"
readonly>

</div>

<div class="mb-3">

<label>Judul</label>

<input
type="text"
class="form-control"
value="<?= $row['judul']; ?>"
readonly>

</div>

<div class="mb-3">

<label>Isi Laporan</label>

<textarea
class="form-control"
rows="4"
readonly><?= $row['isi']; ?></textarea>

</div>

<div class="mb-3">

<label>Status</label>

<select
name="status"
class="form-control">

<option <?=($row['status']=="Menunggu")?"selected":"";?>>
Menunggu
</option>

<option <?=($row['status']=="Diproses")?"selected":"";?>>
Diproses
</option>

<option <?=($row['status']=="Selesai")?"selected":"";?>>
Selesai
</option>

</select>

</div>

<button class="btn btn-success">

Simpan

</button>

<a href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

<?php
include "../layout/footer.php";
?>