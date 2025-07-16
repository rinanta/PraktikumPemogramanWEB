<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost:3307", "root", "", "webinfor");

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



    function ubahdata($data, $id)
{
    global $koneksi;
$nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $nohp = $_POST['nohp'];

    $query = "UPDATE mahasiswa SET 
    nama='$nama',
    nim= '$nim',
    jurusan= '$jurusan',
    nohp= '$nohp'
    WHERE id=$id;
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
    }

    function register($data)
    {
        global $koneksi;

        $username = stripslashes($data["username"]);
        $password1 = $data ["password1"];
        $password2 = $data ["password2"];

        $query = "SELECT * FROM user WHERE username= '$username'";

       $username_chek = mysqli_query($koneksi, $query);
       if(mysqli_num_rows($username_chek) > 0)
        {
            return "username sudah terdaftar";
        }

        if(!preg_match('/^[a-zA-Z0-9.-_]+$/', $username))
        {
            return "username tidak valid";
        }

        if($password1 !== $password2)
        {
            return "Password Tidak Sesuai!";
        }

        $encrypt_pass = password_hash($password1, PASSWORD_DEFAULT);

        $query_insert = "INSERT INTO user (username, password) VALUE ('$username', '$encrypt_pass')";
        if (mysqli_query($koneksi, $query_insert))
        {
            return "Register Berhasil";
        }
        else
        {
            return "gagal" . mysqli_error($konksi);
        
        }

    }


    
?>
