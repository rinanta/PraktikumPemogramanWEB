<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "webinfor");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi query
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
?>
