<?php

require_once "../../config/koneksi.php";

$id = $_POST['id_laporan'];
$status = $_POST['status'];

mysqli_query($conn,"
UPDATE laporan
SET status='$status'
WHERE id_laporan='$id'
");

header("Location: index.php");
exit;