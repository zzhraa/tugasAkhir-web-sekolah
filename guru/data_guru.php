<?php
    include "../koneksi.php";
?>

<html>
    <head>
        <title>Data Guru</title>

        <link rel="icon" href="../dist/img/icon.png" type="image/x-icon">

        <script src="https://cdn.tailwindcss.com"></script>
        <script language="javascript">
            function tanya() {
                if (confirm ("Apakah Anda yakin akan menghapus data guru ini?")) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </head>

    <body>

        <header class="bg-[#B9D9EA] top-0 left-0 w-full z-10">
            <div class="container mx-auto p-4">
                <ul class="flex justify-center space-x-10">
                    <li><a href="../index.php" class="text-white hover:text-[#FFD550] transition duration-300 ease-in-out">Beranda</a></li>
                    <li><a href="../siswa/data_siswa.php" class="text-white hover:text-[#FFD550] transition duration-300 ease-in-out">Data Siswa</a></li>
                    <li><a href="data_guru.php" class="text-[#FFD550] bg-white rounded-xl px-4 shadow-lg">Data Guru</a></li>
                    <li><a href="../mapel/data_mapel.php" class="text-white hover:text-[#FFD550] transition duration-300 ease-in-out">Mata Pelajaran</a></li>
                </ul>
            </div>
        </header>

        <div class="m-5 ml-24">
            <h1 class="text-slate-800 font-semibold text-2xl">Data Guru</h1>
        </div>

        <div class="w-28 absolute right-0 -mt-14">
            <img src="../dist/img/star4.svg" alt="Stars">
        </div>

        <div class="w-5 absolute ml-10 -mt-10 animate-pulse">
            <img src="../dist/img/sparkpink.svg" alt="Sparkle">
        </div>

        <div class="m-5 ml-24">
            <a href="input.php" class="bg-[#B9D9EA] shadow-md p-1 px-2 text-white rounded-md hover:bg-[#9ec9e0] transition duration-300 ease-in-out">Input Data Guru</a>
        </div>

        <form class="flex flex-col justify-center items-center">
            <table class="border-collapse border border-slate-400">
                <thead>
                    <tr class="bg-slate-100 text-slate-800">
                        <th class="border border-slate-300 p-2 w-32">NIP</th>
                        <th class="border border-slate-300 p-2 w-60">Nama Guru</th>
                        <th class="border border-slate-300 p-2 w-36">Jenis Kelamin</th>
                        <th class="border border-slate-300 p-2 w-96">Alamat</th>
                        <th class="border border-slate-300 p-2 w-24">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        $query = "SELECT nip, nm_guru, jk, alamat FROM tbl_guru ORDER BY nip DESC";

                        $sql = mysqli_query($koneksi, $query);
                            while ($hasil = mysqli_fetch_array ($sql)) {
                                $nip = stripslashes ($hasil['nip']);
                                $nm_guru = stripslashes ($hasil['nm_guru']);
                                $jk = stripslashes ($hasil['jk']);
                                $alamat = stripslashes ($hasil['alamat']);
                    ?>
                        <tr class="text-slate-800">
                            <td class="border border-slate-300 p-2"><?= $hasil['nip'] ?></td>
                            <td class="border border-slate-300 p-2"><?= $hasil['nm_guru'] ?></td>
                            <td class="border border-slate-300 p-2"><?= $hasil['jk'] ?></td>
                            <td class="border border-slate-300 p-2"><?= $hasil['alamat'] ?></td>
                            <td class="border border-slate-300 p-2">
                            <div class="flex justify-center gap-2">
                                    <div class="bg-[#FFD550] w-7 rounded-sm">
                                        <a href="edit.php?id=<?= $hasil['nip'] ?>"><img src="../dist/img/edit.svg" alt="Edit" class="p-1"></a>
                                    </div>
                                    <div class="bg-[#f86060] w-7 rounded-sm">
                                        <a href="hapus.php?id=<?= $hasil['nip'] ?>"><img src="../dist/img/delete.svg" alt="Delete" class="p-1"></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </form>

    </body>
</html>