<?php
session_start();

if (isset($_SESSION['role'])) {

    if ($_SESSION['role'] == "admin") {
        header("Location: admin/dashboard.php");
    } else {
        header("Location: user/dashboard.php");
    }

    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Salero Pakan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Salero Pakan</h3>
                    <small>Silakan Login</small>
                </div>

                <div class="card-body">

                    <?php
                    if(isset($_GET['pesan'])){
                        echo "<div class='alert alert-danger'>Username atau Password salah!</div>";
                    }
                    ?>

                    <form action="proses_login.php" method="POST">

                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button class="btn btn-success w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>