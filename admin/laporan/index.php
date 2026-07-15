<?php

$menu = "laporan";
$judul = "Data Laporan";

include "../layout/header.php";
include "../layout/sidebar.php";

$query = mysqli_query($conn,"
SELECT laporan.*, user.nama
FROM laporan
JOIN user
ON laporan.id_user = user.id_user
ORDER BY laporan.id_laporan DESC
");

?>

<h2>Data Laporan</h2>

<table class="table table-bordered table-hover">

    <thead class="table-success">

        <tr>

            <th>No</th>
            <th>Nama User</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th width="120">Aksi</th>

        </tr>

    </thead>

    <tbody>

    <?php

    $no = 1;

    while($row = mysqli_fetch_assoc($query)){

    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $row['nama']; ?></td>

        <td><?= $row['judul']; ?></td>

        <td><?= $row['tanggal']; ?></td>

        <td>

            <?php

            if($row['status']=="Menunggu"){

                echo "<span class='badge bg-warning text-dark'>Menunggu</span>";

            }elseif($row['status']=="Diproses"){

                echo "<span class='badge bg-primary'>Diproses</span>";

            }else{

                echo "<span class='badge bg-success'>Selesai</span>";

            }

            ?>

        </td>

        <td>

            <a href="edit.php?id=<?= $row['id_laporan']; ?>"
            class="btn btn-warning btn-sm">

                Ubah Status

            </a>

        </td>

    </tr>

    <?php
    }
    ?>

    </tbody>

</table>

<?php
include "../layout/footer.php";
?>