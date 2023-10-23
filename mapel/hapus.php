<?php

    include "../koneksi.php";
    if (isset($_GET['id'])) {
        $kd_mapel = $_GET['id'];
    } else {
        die ("Error. No Id Selected! ");
    }

    if (!empty($kd_mapel) && $kd_mapel != "") {
        $query = "DELETE FROM rbl_mapel WHERE kd_mapel='$kd_mapel'";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo '<script>alert("Data Mapel Sudah Terhapus");window.location="data_mapel.php";</script>';
        } else {
            echo '<script>alert("Data Mapel Berhasil Terhapus");window.location="data_mapel.php";</script>';
        }
    } else {
        die ("Access Denied");
    }

?>