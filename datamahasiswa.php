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
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Data Mahasiswa</h1>
    <a href="tambahdata.php">
    <button style="margin-bottom:12px;background-color: pink;
;">Tambah Data</button></a>

    <table border='1' cellspacing='0' cellpadding='10'>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>No. HP</th>
            <th>Aksi</th>
        </tr>
      <?php $i = 1; ?>
<?php foreach ($rows as $mhs): ?>
    <tr>
        <td><?= $i ?></td>
        <td><img src="img/<?= $mhs["foto"] ?>" alt="foto" width="60" /></td>
        <td><?= $mhs["nama"] ?></td>
        <td><?= $mhs["nim"] ?></td>
        <td><?= $mhs["jurusan"] ?></td>
        <td><?= $mhs["nohp"] ?></td>
        <td>
            <a href="hapusdata.php?id=<?= $mhs["id"] ?>" 
               onclick="return confirm('Yakin ingin menghapus?');"
               style="margin-bottom:12px; background-color: pink; padding: 5px 10px; text-decoration: none; color: black; border-radius: 4px;">
                Hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
    </table>
</body>
</html>

