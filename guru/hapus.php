<?php

    include "../koneksi.php";
    if (isset($_GET['id'])) {
        $nip = $_GET['id'];
    } else {
        die ("Error. No Id Selected! ");
    }

    if (!empty($nip) && $nip != "") {
        $query = "DELETE FROM tbl_guru WHERE nip='$nip'";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo '<script>alert("Data Guru Sudah Terhapus");window.location="data_guru.php";</script>';
        } else {
            echo '<script>alert("Data Guru Berhasil Terhapus");window.location="data_guru.php";</script>';
        }
    } else {
        die ("Access Denied");
    }

?>