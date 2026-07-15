<?php

$menu="laporan";
$judul="Laporan";

include "layout/header.php";
include "layout/sidebar.php";

$id=$_SESSION['id_user'];

$data=mysqli_query($conn,"
SELECT *
FROM laporan
WHERE id_user='$id'
ORDER BY id_laporan DESC
");

?>

<h2>Buat Laporan</h2>

<div class="card shadow mb-4">

<div class="card-body">

<form action="simpan_laporan.php" method="POST">

<div class="mb-3">

<label>Judul</label>

<input
type="text"
name="judul"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Isi Laporan</label>

<textarea
name="isi"
rows="4"
class="form-control"
required></textarea>

</div>

<button class="btn btn-success">

Simpan

</button>

</form>

</div>

</div>

<h3>Riwayat Laporan</h3>

<table class="table table-bordered">

<thead class="table-success">

<tr>

<th>No</th>

<th>Judul</th>

<th>Tanggal</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<?php

$no=1;

while($r=mysqli_fetch_assoc($data)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $r['judul']; ?></td>

<td><?= $r['tanggal']; ?></td>

<td><?= $r['status']; ?></td>

</tr>

<?php
}
?>

</tbody>

</table>

<?php
include "layout/footer.php";
?>