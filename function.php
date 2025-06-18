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

}function tambahmahasiswa ($data) {
    global $koneksi;
$nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $nohp = $_POST['nohp'];

    $query = "INSERT INTO mahasiswa VALUES ('','','$nama', '$nim', '$jurusan', '$nohp')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa where id=$id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

?>
