<?php

require_once "../../config/koneksi.php";

$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query($conn, "INSERT INTO supplier
(nama_supplier, alamat, telepon)
VALUES
('$nama_supplier','$alamat','$telepon')");

header("Location: index.php");
exit;