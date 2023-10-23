<?php

    include "../koneksi.php";

    // Proses
    if ( isset($_POST['Input']) ) {
        $nisn = addslashes (strip_tags ($_POST['nisn']));
        $nm_siswa = addslashes (strip_tags ($_POST['nm_siswa']));
        $kelas = addslashes (strip_tags ($_POST['kelas']));
        $jurusan = addslashes (strip_tags ($_POST['jurusan']));
        $jk = addslashes (strip_tags ($_POST['jk']));
        $alamat = addslashes (strip_tags ($_POST['alamat']));

        // Insert ke tabel

        if (empty($nisn) || empty($nm_siswa) || empty($kelas) || empty($jurusan) || empty($jk) || empty($alamat)) {
            echo '<script>alert("Semua kolom harus diisi");</script>';
        } else {
            $query = "INSERT INTO tbl_siswa VALUES('$nisn','$nm_siswa','$kelas','$jurusan','$jk','$alamat')";
            $sql = mysqli_query($koneksi, $query);

            if ($sql) {
                echo '<script>alert("Tambah data siswa berhasil");window.location="data_siswa.php";</script>';
            } else {
                echo '<script>alert("Tambah data siswa gagal");window.location="input.php";</script>';
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
            <h1 class="text-white font-semibold text-2xl">Input Data Siswa</h1>
        </div>

        <div class="absolute w-60 right-0 bottom-0">
            <img src="../dist/img/star2.svg" alt="Stars">
        </div>

        <div class="bg-white w-4/12 p-5 m-auto rounded-lg shadow-xl">
            <form action="" method="POST" name="input">
                <table class="text-slate-800" width="700">
                    <tr>
                        <td class="w-40">NISN</td>
                        <td>: &nbsp;<input type="number" name="nisn" class="border border-slate-300 rounded-md"></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: &nbsp;<input type="text" name="nm_siswa" class="border border-slate-300 rounded-md"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: &nbsp;
                            <input type="radio" name="kelas" value="X" <?php if(isset($_POST['kelas']) && $_POST['kelas'] == 'X') echo 'checked'; ?>>
                            <label for="">X</label>
                            <input type="radio" name="kelas" value="XI" <?php if(isset($_POST['kelas']) && $_POST['kelas'] == 'XI') echo 'checked'; ?>>
                            <label for="">XI</label>
                            <input type="radio" name="kelas" value="XII" <?php if(isset($_POST['kelas']) && $_POST['kelas'] == 'XII') echo 'checked'; ?>>
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
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="border border-slate-300 rounded-md"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="submit" name="Input" value="Input" class="bg-[#FFD550] text-white p-1 rounded-sm">&nbsp;
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