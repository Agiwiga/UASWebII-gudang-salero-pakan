<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "salero_pakan";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
define("BASE_URL", "/UAS_WEB2_MAgilAlGhani_24042231042/salero-pakan/");

?>
