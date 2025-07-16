<?php

session_start();

if(!isset($_SESSION["login"]))
{
    header("Location: login.php");
    exit;
}

require 'function.php';

if (isset($_POST['submit'])) {
    if (tambahmahasiswa($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan.');
            document.location.href = 'datamahasiswa.php';
        </script>";
    } else {
        echo "Gagal ditambahkan: " . mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Judul -->
        <h1>Tambah Data Mahasiswa</h1>
        <!-- Formulir -->
        <form action="" method="post" enctype="multipart/from-data">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Nama lengkap*" required>

             <label for="foto">Foto</label>
             <input type="file" name="foto" id="foto" required>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>

            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required>

            <label for="nohp">No. HP</label>
            <input type="text" name="nohp" id="nohp" required>

            <button type="submit" name="submit">Tambah</button>
        </form>
    </div>
</body>
</html>

