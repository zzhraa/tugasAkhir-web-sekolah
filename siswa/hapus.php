<?php

    include "../koneksi.php";
    if (isset($_GET['id'])) {
        $nisn = $_GET['id'];
    } else {
        die ("Error. No Id Selected! ");
    }

    if (!empty($nisn) && $nisn != "") {
        $query = "DELETE FROM tbl_siswa WHERE nisn='$nisn'";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo '<script>alert("Data Siswa Sudah Terhapus");window.location="data_siswa.php";</script>';
        } else {
            echo '<script>alert("Data Siswa Berhasil Terhapus");window.location="data_siswa.php";</script>';
        }
    } else {
        die ("Access Denied");
    }

?>