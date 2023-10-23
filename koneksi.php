<?php

    $koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

    if( !$koneksi ) {
        echo '<script>alert("Gagal Koneksi!")</script>';
    }

?>