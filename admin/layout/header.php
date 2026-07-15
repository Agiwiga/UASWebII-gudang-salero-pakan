<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once __DIR__ . "/../../config/koneksi.php";

if(!isset($_SESSION['role']) || $_SESSION['role'] != "admin"){
    header("Location: ".BASE_URL."login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin | Salero Pakan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= BASE_URL ?>assets/style.css">

</head>

<body class="bg-light">