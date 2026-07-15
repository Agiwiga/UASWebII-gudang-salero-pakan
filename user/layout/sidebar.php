<div class="wrapper">

    <aside class="sidebar">

        <h3 class="text-center mb-4">
            Salero Pakan
        </h3>

        <a href="<?= BASE_URL ?>user/dashboard.php">
            <i class="bi bi-house"></i>
            Dashboard
        </a>

        <a href="<?= BASE_URL ?>user/produk.php">
            <i class="bi bi-box"></i>
            Daftar Produk
        </a>
        
        <a class="<?= ($menu=="laporan") ? "active" : ""; ?>"
            href="<?= BASE_URL ?>user/laporan.php">
            <i class="bi bi-file-earmark-text"></i>
            Laporan
        </a>

        <hr>

        <a href="<?= BASE_URL ?>logout.php">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>

    </aside>

    <main class="content">

        <nav class="navbar bg-white shadow-sm rounded mb-4">

            <div class="container-fluid">

                <h5 class="mb-0">
                    Dashboard User
                </h5>

                <span>

                    Halo,

                    <strong><?= $_SESSION['nama']; ?></strong>

                </span>

            </div>

        </nav>