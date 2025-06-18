<?php
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
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <label>Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="nama lengkap*" required><br>

        <label>NIM :</label>
        <input type="text" name="nim" id="nim" required><br>

        <label>Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required><br>

        <label>No.HP :</label>
        <input type="text" name="nohp" id="nohp" required><br><br>

        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>
