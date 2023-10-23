<?php

    include "../koneksi.php";

    // Tampung Data id dari URL dengan GET
    $kd_mapel = $_GET['id'];

    // Perintah Tampilkan Data ke Form
    $sql_tampil = "SELECT * FROM tbl_mapel WHERE kd_mapel='$kd_mapel'";
    $query_tampil = mysqli_query($koneksi, $sql_tampil);
    $data_tampil = mysqli_fetch_array($query_tampil);

    if ($data_tampil) {
        // print_r($data_tampil);
    } else {
        echo "Data tidak ditemukan";
    }

    $kd_mapel = $data_tampil['kd_mapel'];
    $nm_mapel = stripslashes ($data_tampil['nm_mapel']);

    if(isset($_POST['ubah']) ) {

        // Tampung Data
        $kd_mapel = $_POST['kd_mapel'];
        $nm_mapel = addslashes (strip_tags ($_POST['nm_mapel']));

        // Proses Simpan
        $sql_ubah = "UPDATE tbl_mapel SET nm_mapel='$nm_mapel' WHERE kd_mapel='$kd_mapel'";

        mysqli_query($koneksi, $sql_ubah);

        if ($data_tampil) {
            // print_r($data_tampil);
        } else {
            echo "Data tidak ditemukan";
        }

        if(mysqli_error($koneksi)) {
            echo "Error: " . mysqli_error($koneksi);
        } else {
            echo '<script>
                          alert("Data Mapel Berhasil Tersimpan!");
                          window.location="data_mapel.php";
                  </script>';
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Mapel</title>

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
            <h1 class="text-white font-semibold text-2xl">Edit Data Mata Pelajaran</h1>
        </div>

        <div class="absolute w-60 right-0 bottom-0">
            <img src="../dist/img/star2.svg" alt="Stars">
        </div>
        
        <div class="bg-white w-4/12 p-5 m-auto rounded-lg shadow-xl">
            <form action="" method="POST" name="Input">
                <table class="text-slate-800" width="700">
                    <tr>
                        <td class="w-40">Kode Mapel</td>
                        <td>: &nbsp;<input type="number" name="kd_mapel" placeholder="kd_mapel" class="border border-slate-300 rounded-md" value="<?= $kd_mapel ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Mapel</td>
                        <td>: &nbsp;<input type="text" name="nm_mapel" placeholder="Nama Lengkap"class="border border-slate-300 rounded-md" value="<?=$nm_mapel?>"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="submit" value="Ubah" name="ubah" class="bg-[#FFD550] text-white p-1 rounded-sm">&nbsp;
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

