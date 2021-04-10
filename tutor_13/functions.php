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
    $nama = htmlspecialchars ($data["nama"]);
    $npm = htmlspecialchars ($data["npm"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars ($data["jurusan"]);
    //upload gambar
    $gambar = upload();
    if (!$gambar ){
        return false;
    }
        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$email','$jurusan','$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
function upload(){

    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpnama = $_FILES['gambar']['tmpnama'];

    //cek gambar upload
    if ($error  === 4){
        echo"<script>
                alert('pilih gambar');
            </script>";
        return false;
    }
    $ekstensifilevalid = ['jpg','png','jpeg'];
    $ekstensifile = explode('.',$namafile);
    $ekstensifile = strtolower (end($ekstensifilevalid));
    if(!in_array($ekstensifile,$ekstensifilevalid)){
        echo"<script>
                alert('bukan gambar');
            </script>";
        return false;
    }
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah ($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars ($data["nama"]);
    $npm = htmlspecialchars ($data["npm"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars ($data["jurusan"]);
    $gambar = htmlspecialchars ($data["gambar"]);

        //query update data
        $query = "UPDATE mahasiswa SET
                    nama ='$nama',
                    npm = '$npm',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                WHERE id = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function cari ($keyword){

    $query = "SELECT * FROM mahasiswa WHERE
        nama LIKE  '%$keyword%' OR
        npm LIKE  '%$keyword%'
    ";
    return query($query);
}
?>