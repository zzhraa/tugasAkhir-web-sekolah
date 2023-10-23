<?php

    include "../koneksi.php";

    // Proses
    if ( isset($_POST['Input']) ) {
        $kd_mapel = addslashes (strip_tags ($_POST['kd_mapel']));
        $nm_mapel = addslashes (strip_tags ($_POST['nm_mapel']));

        // Insert ke tabel

        if (empty($kd_mapel) || empty($nm_mapel)) {
            echo '<script>alert("Semua kolom harus diisi");</script>';
        } else {
            $query = "INSERT INTO tbl_mapel VALUES('$kd_mapel','$nm_mapel')";
            $sql = mysqli_query($koneksi, $query);

            if ($sql) {
                echo '<script>alert("Tambah data mapel berhasil");window.location="data_mapel.php";</script>';
            } else {
                echo '<script>alert("Tambah data mapel gagal");window.location="input.php";</script>';
            }
        }
    }

?>

<html>

    <head>
        <title>Input Data Siswa</title>

        <link rel="icon" href="../dist/img/icon.png" type="image/x-icon">

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#B9D9EA]">

        <div class="w-5 absolute ml-24 animate-pulse">
            <img src="../dist/img/sparkwhite.svg" alt="Sparkle">
        </div>

        <div class="w-5 absolute ml-40 mb-10 bottom-0 animate-pulse">
            <img src="../dist/img/sparkwhite.svg" alt="Sparkle">
        </div>

        <div class="w-5 absolute right-0 animate-pulse mt-24 mr-10">
            <img src="../dist/img/sparkwhite.svg" alt="Sparkle">
        </div>

        <div class="absolute w-40 ml-52 mt-52">
            <img src="../dist/img/star6.svg" alt="Stars">
        </div>

        <div class="m-5 text-center">
            <h1 class="text-white font-semibold text-2xl">Input Data Mata Pelajaran</h1>
        </div>

        <div class="absolute w-60 right-0 bottom-0">
            <img src="../dist/img/star2.svg" alt="Stars">
        </div>

        <div class="bg-white w-4/12 p-5 m-auto rounded-lg shadow-xl">
            <form action="" method="POST" name="input">
                <table class="text-slate-800" width="700">
                    <tr>
                        <td class="w-40">Kode Mapel</td>
                        <td>: &nbsp;<input type="text" name="kd_mapel"class="border border-slate-300 rounded-md"></td>
                    </tr>
                    <tr>
                        <td>Nama Mapel</td>
                        <td>: &nbsp;<input type="text" name="nm_mapel"class="border border-slate-300 rounded-md"></td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="submit" name="Input" value="Input" class="bg-[#FFD550] text-white p-1 rounded-sm">&nbsp;
                                <input type="reset" name="reset" value="Cancel" class="bg-[#f86060] text-white p-1 rounded-sm" onclick="goToDataMapel()">
                                <script>
                                    function goToDataMapel() {
                                        window.location.href = 'data_mapel.php';
                                    }
                                </script>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
</html>