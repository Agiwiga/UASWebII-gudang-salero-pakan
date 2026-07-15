<?php

session_start();

require_once "../config/koneksi.php";

$id=$_SESSION['id_user'];

$judul=$_POST['judul'];

$isi=$_POST['isi'];

$tanggal=date("Y-m-d");

mysqli_query($conn,"
INSERT INTO laporan
(id_user,judul,isi,tanggal,status)

VALUES

('$id','$judul','$isi','$tanggal','Menunggu')
");

header("Location: laporan.php");
exit;