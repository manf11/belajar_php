<?php
//koneksi
require 'functions.php';

//ambil data dari tabel database
// $result = mysqli_query($conn,"SELECT * FROM mahasiswa");

//ambil data fetch dari objekk result
//mysqli_fetch_row // mengembalikan array numerik
//mysqli_fetch_assoc // ||========|| assosiative
//mysqli_fetch_array// ||==========|| keduanya
//mysqli_fetch_object ||============|| objek contoh di oop dan framework CI $mhs->email
//  while ($mhs = mysqli_fetch_assoc($result) ) {

//  };
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>

<h1>daftar mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <td>No.</td>
        <td>aksi</td>
        <td>gambar</td>
        <td>NPM</td>
        <td>Nama</td>
        <td>email</td>
        <td>jurusan</td>
    </tr>
    <?php $i=1; ?>
    <?php foreach ( $mahasiswa as $row ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
        <td><?= $row["npm"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>