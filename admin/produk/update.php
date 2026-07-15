<?php

require_once "../../config/koneksi.php";

$id = $_POST['id_produk'];
$nama = $_POST['nama_produk'];
$id_supplier = $_POST['id_supplier'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn, "UPDATE produk SET

nama_produk='$nama',
id_supplier='$id_supplier',
harga='$harga',
stok='$stok'

WHERE id_produk='$id'");

header("Location: index.php");
exit;