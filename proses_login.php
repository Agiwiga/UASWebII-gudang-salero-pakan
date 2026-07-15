<?php

session_start();

include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($query) == 1){

    $data = mysqli_fetch_assoc($query);

    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    if($data['role']=="admin"){

        header("Location: admin/dashboard.php");

    }else{

        header("Location: user/dashboard.php");

    }

}else{

    header("Location: login.php?pesan=gagal");

}