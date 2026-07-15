<?php

require_once "../../config/koneksi.php";

$id = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query($conn, "UPDATE supplier SET
nama_supplier='$nama_supplier',
alamat='$alamat',
telepon='$telepon'
WHERE id_supplier='$id'");

header("Location: index.php");
exit;