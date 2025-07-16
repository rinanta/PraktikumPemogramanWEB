<?php

session_start();

if(!isset($_SESSION["login"]))
{
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if (isset($_POST['submit'])) {
    if (ubahdata($_POST, $id) > 0) {
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
    <title>Ubah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Judul -->
        <h1>Ubah Data Mahasiswa</h1>
        <!-- Formulir -->
        <form action="" method="post" enctype="multipart/from-data">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Nama lengkap*" required value="<?= $mhs
            ["nama"]?>">

             <!-- <label for="foto">Foto</label>
             <input type="file" name="foto" id="foto" required> -->

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required value="<?= $mhs
            ["nim"]?>">

            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs
            ["jurusan"]?>">

            <label for="nohp">No. HP</label>
            <input type="text" name="nohp" id="nohp" required value="<?= $mhs
            ["nohp"]?>">

            <button type="submit" name="submit">Tambah</button>
        </form>
    </div>
</body>
</html>

