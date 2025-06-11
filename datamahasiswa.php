<?php
require 'function.php';

$query = "SELECT * FROM mahasiswa";
$rows = query($query);
$i = 1; // Inisialisasi variabel untuk nomor urut
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border='1' cellspacing='0' cellpadding='10'>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>No. HP</th>
        </tr>
        <?php foreach ($rows as $mhs): ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="img/<?= $mhs["foto"] ?>" alt="foto" width="60" /></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
            <td><?= $mhs["nohp"] ?></td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
</body>
</html>
