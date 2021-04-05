<?php

$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data){
    global $conn;
    //ambil semua data dari form
    $nama = htmlspesialchars ($data["nama"]);
    $npm = htmlspesialchars ($data["npm"]);
    $email = htmlspesialchars ($data["email"]);
    $jurusan = htmlspesialchars ($data["jurusan"]);
    $gambar = htmlspesialchars ($data["gambar"]);

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$email','$jurusan','$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>