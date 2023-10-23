<?php

    include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Sekolah</title>

        <link rel="icon" href="dist/img/icon.png" type="image/x-icon">

        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        
    <header class="bg-[#B9D9EA] top-0 left-0 w-full z-10">
        <div class="container mx-auto p-4">
            <ul class="flex justify-center space-x-10">
                <li><a href="index.php" class="text-[#FFD550] bg-white rounded-xl px-4 shadow-lg">Beranda</a></li>
                <li><a href="siswa/data_siswa.php" class="text-white hover:text-[#FFD550] transition duration-300 ease-in-out">Data Siswa</a></li>
                <li><a href="guru/data_guru.php" class="text-white hover:text-[#FFD550] transition duration-300 ease-in-out">Data Guru</a></li>
                <li><a href="mapel/data_mapel.php" class="text-white hover:text-[#FFD550] transition duration-300 ease-in-out">Mata Pelajaran</a></li>
            </ul>
        </div>
    </header>

        <div class="w-5 absolute ml-5 mt-5 animate-pulse">
            <img src="dist/img/sparkyell.svg" alt="Sparkle">
        </div>

        <div class="flex justify-center items-center">
            <div class="w-32 absolute mt-48 mr-80">
                <img src="dist/img/bun.svg" alt="bunch">
            </div>
        </div>

        <div class="flex flex-col justify-center items-center text-center mt-28">
            <h1 class="text-xl tracking-widest text-[#B9D9EA] font-medium">SELAMAT DATANG</h1>
            <h1 class="text-base mt-4 text-slate-600 font-medium">Di Penginputan Data</h1>
            <div class="absolute w-5 ml-60 mt-3 animate-pulse">
                <img src="dist/img/sparkpink.svg" alt="Sparkle">
            </div>
            <h1 class="text-2xl mt-4 tracking-widest text-[#B9D9EA] font-medium">SMK MUHAMMADIYAH TASIKMALAYA</h1>
        </div>

        <div class="w-60 absolute -ml-20">
            <img src="dist/img/abstrack.svg" alt="Abstarck">
        </div>

        <div class="absolute w-5 ml-96 mt-16 animate-pulse">
            <img src="dist/img/sparkpink.svg" alt="Sparkle">
        </div>

        <div class="w-4/12 absolute right-0 -mt-48">
            <img src="dist/img/star1.svg" alt="Stars">
        </div>
        
        <div class="w-7/12 absolute right-0 bottom-0">
            <img src="dist/img/blob4.png" alt="Blob">
        </div>
        
        <div class="flex justify-center items-center mt-44">
            <div class="w-36 absolute">
                <img src="dist/img/star.svg" alt="Stars">
            </div>
        </div>

        <div class="w-5 absolute ml-40 animate-pulse mt-20">
            <img src="dist/img/sparkyell.svg" alt="Sparkle">
        </div>

        <div class="flex justify-center items-center mt-20">
            <div class="w-5 absolute ml-60 animate-pulse">
                <img src="dist/img/sparkwhite.svg" alt="Sparkle">
            </div>
        </div>

        <div class="w-5 absolute right-0 mr-32 mt-8 animate-pulse">
            <img src="dist/img/sparkwhite.svg" alt="Sparkle">
        </div>

        <div class="flex justify-center items-center">
            <div class="absolute bottom-0 mb-4">
                <h3 class="text-white">@azzahra</h3>
            </div>
        </div>
    </body>

</html>