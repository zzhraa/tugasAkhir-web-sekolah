<?php

    include "../koneksi.php";

    // Tampung Data id dari URL dengan GET
    $nisn = $_GET['id'];

    // Perintah Tampilkan Data ke Form
    $sql_tampil = "SELECT * FROM tbl_siswa WHERE nisn='$nisn'";
    $query_tampil = mysqli_query($koneksi, $sql_tampil);
    $data_tampil = mysqli_fetch_array($query_tampil);

    if ($data_tampil) {
        // print_r($data_tampil);
    } else {
        echo "Data tidak ditemukan";
    }

    $nisn = $data_tampil['nisn'];
    $nama_siswa = stripslashes ($data_tampil['nm_siswa']);
    $kelas = stripslashes ($data_tampil['kelas']);
    $jurusan = stripslashes ($data_tampil['jurusan']);
    $jk = stripslashes ($data_tampil['jk']);

    if(isset($_POST['ubah']) ) {

        // Tampung Data
        $nisn = $_POST['nisn'];
        $nama_siswa = addslashes (strip_tags ($_POST['nm_siswa']));
        $kelas = addslashes (strip_tags ($_POST['kelas']));
        $jurusan = addslashes (strip_tags ($_POST['jurusan']));
        $jk = addslashes (strip_tags ($_POST['jk']));
        $alamat = addslashes (strip_tags ($_POST['alamat']));

        // Proses Simpan
        $sql_ubah = "UPDATE tbl_siswa SET nm_siswa='$nama_siswa', kelas='$kelas', jurusan='$jurusan', jk='$jk', alamat='$alamat' WHERE nisn='$nisn'";

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
                          alert("Data Siswa Berhasil Tersimpan!");
                          window.location="data_siswa.php";
                  </script>';
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Siswa</title>

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
            <h1 class="text-white font-semibold text-2xl">Edit Data Siswa</h1>
        </div>

        <div class="absolute w-60 right-0 bottom-0">
            <img src="../dist/img/star2.svg" alt="Stars">
        </div>
        
        <div class="bg-white w-4/12 p-5 m-auto rounded-lg shadow-xl">
            <form action="" method="POST" name="Input">
                <table class="text-slate-800" width="700">
                    <tr>
                        <td class="w-40">NISN</td>
                        <td>: &nbsp;<input type="number" name="nisn" placeholder="nisn" class="border border-slate-300 rounded-md" value="<?= $nisn ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: &nbsp;<input type="text" name="nm_siswa" placeholder="Nama Lengkap" class="border border-slate-300 rounded-md" value="<?=$nama_siswa?>"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: &nbsp;
                            <input type="radio" name="kelas" value="X" <?php if(isset($kelas) && $kelas == 'X') echo 'checked'; ?>>
                            <label for="">X</label>
                            <input type="radio" name="kelas" value="XI" <?php if(isset($kelas) && $kelas == 'XI') echo 'checked'; ?>>
                            <label for="">XI</label>
                            <input type="radio" name="kelas" value="XII" <?php if(isset($kelas) && $kelas == 'XII') echo 'checked'; ?>>
                            <label for="">XII</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: &nbsp;
                            <select name="jurusan" id="jurusan" class="border border-slate-300 rounded-md">
                                <option value="RPL" <?php if(isset($_POST['jurusan']) && $_POST['jurusan'] == 'RPL') echo 'checked'; ?>>RPL</option>
                                <option value="TKJ" <?php if(isset($_POST['jurusan']) && $_POST['jurusan'] == 'TKJ') echo 'checked'; ?>>TKJ</option>
                                <option value="BDPM" <?php if(isset($_POST['jurusan']) && $_POST['jurusan'] == 'BDPM') echo 'checked'; ?>>BDPM</option>
                                <option value="TBSM" <?php if(isset($_POST['jurusan']) && $_POST['jurusan'] == 'TBSM') echo 'checked'; ?>>TBSM</option>
                                <option value="TKR" <?php if(isset($_POST['jurusan']) && $_POST['jurusan'] == 'TKR') echo 'checked'; ?>>TKR</option>
                            </select>
                        </td>
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
                            <input type="reset" name="reset" value="Cancel" class="bg-[#f86060] text-white p-1 rounded-sm" onclick="goToDataSiswa()">
                            <script>
                                function goToDataSiswa() {
                                    window.location.href = 'data_siswa.php';
                                }
                            </script>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        
    </body>
</html>