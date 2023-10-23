<?php

    include "../koneksi.php";

    // Tampung Data id dari URL dengan GET
    $nip = $_GET['id'];

    // Perintah Tampilkan Data ke Form
    $sql_tampil = "SELECT * FROM tbl_guru WHERE nip='$nip'";
    $query_tampil = mysqli_query($koneksi, $sql_tampil);
    $data_tampil = mysqli_fetch_array($query_tampil);

    if ($data_tampil) {
        // print_r($data_tampil);
    } else {
        echo "Data tidak ditemukan";
    }

    $nip = $data_tampil['nip'];
    $nm_guru = stripslashes ($data_tampil['nm_guru']);
    $jk = stripslashes ($data_tampil['jk']);
    $alamat = stripslashes ($data_tampil['alamat']);

    if(isset($_POST['ubah']) ) {

        // Tampung Data
        $nip = $_POST['nip'];
        $nm_guru = addslashes (strip_tags ($_POST['nm_guru']));
        $jk = addslashes (strip_tags ($_POST['jk']));
        $alamat = addslashes (strip_tags ($_POST['alamat']));

        // Proses Simpan
        $sql_ubah = "UPDATE tbl_guru SET nm_guru='$nm_guru', jk='$jk', alamat='$alamat' WHERE nip='$nip'";

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
                          alert("Data Guru Berhasil Tersimpan!");
                          window.location="data_guru.php";
                  </script>';
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Guru</title>

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
            <h1 class="text-white font-semibold text-2xl">Edit Data Guru</h1>
        </div>

        <div class="absolute w-60 right-0 bottom-0">
            <img src="../dist/img/star2.svg" alt="Stars">
        </div>
        
        <div class="bg-white w-4/12 p-5 m-auto rounded-lg shadow-xl">
            <form action="" method="POST" name="Input">
                <table class="text-slate-800" width="700">
                    <tr>
                        <td class="w-40">NIP</td>
                        <td>: &nbsp;<input type="number" name="nip" placeholder="nip" class="border border-slate-300 rounded-md" value="<?= $nip ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td>: &nbsp;<input type="text" name="nm_guru" placeholder="Nama Lengkap" class="border border-slate-300 rounded-md" value="<?=$nm_guru?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: &nbsp;
                            <input type="radio" name="jk" value="perempuan" <?php if(isset($_POST['jk']) && $_POST['jk'] == 'perempuan') echo 'checked'; ?>>
                            <label for="">Perempuan</label>
                            <input type="radio" name="jk" value="laki-Laki" <?php if(isset($_POST['jk']) && $_POST['jk'] == 'laki-laki') echo 'checked'; ?>>
                            <label for="">Laki-Laki</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: &nbsp;
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="border border-slate-300 rounded-md" value="<?=$alamat?>"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="submit" value="Ubah" name="ubah" class="bg-[#FFD550] text-white p-1 rounded-sm">&nbsp;
                            <input type="reset" name="reset" value="Cancel" class="bg-[#f86060] text-white p-1 rounded-sm" onclick="goToDataGuru()">
                            <script>
                                function goToDataGuru() {
                                    window.location.href = 'data_guru.php';
                                }
                            </script>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
</html>

