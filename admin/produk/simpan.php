<?php

require_once "../../config/koneksi.php";

$nama = $_POST['nama_produk'];
$supplier = $_POST['id_supplier'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn,"INSERT INTO produk
(nama_produk,id_supplier,harga,stok)
VALUES
('$nama','$supplier','$harga','$stok')");

header("Location:index.php");
exit;