<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}

//koneksi
require 'functions.php';

//pagination
//konfigurasi
$jumlahdatahalaman = 2;
$jumlahdata = count(query("SELECT * FROM mahasiswa "));
$jumlahhalaman = ceil($jumlahdata/ $jumlahdatahalaman);
$halamanaktif = (isset($_GET["halaman"]))? $_GET["halaman"]:1;
$awaldata = ($jumlahdatahalaman*$halamanaktif)-$jumlahdatahalaman;
//ambil data dari tabel database
// $result = mysqli_query($conn,"SELECT * FROM mahasiswa");

//ambil data fetch dari objekk result
//mysqli_fetch_row // mengembalikan array numerik
//mysqli_fetch_assoc // ||========|| assosiative
//mysqli_fetch_array// ||==========|| keduanya
//mysqli_fetch_object ||============|| objek contoh di oop dan framework CI $mhs->email
//  while ($mhs = mysqli_fetch_assoc($result) ) {

//  };
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata,$jumlahdatahalaman");
//tombol cari di klik
if (isset($_POST["cari"])){
    $mahasiswa = cari ($_POST["keyword"]);
}
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
<a href="logout.php">logout</a>
<h1>daftar mahasiswa</h1>
<a href="tambah.php">tambah data mahasiswa</a>
<br>
</br>
<form action="" method="POST">

    <input type="text" name="keyword" size="50" autofocus placeholder="masukan nama" autocomplete="off">
    <button type="submit" name="cari">cari</button>

</form>
<br><br>
<!-- navigasi -->
<?php if ($halamanaktif>1):?>
    <a href="?halaman=<?=$halamanaktif -1; ?>">&laquo;</a>
<?php endif; ?>

<?php for ($i=1; $i <=$jumlahdatahalaman; $i++ ) : ?>
    <?php if($i == $halamanaktif) :?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i ?></a>
    <?php else: ?>
        <a href="?halaman=<?= $i; ?>"><?= $i ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if ($halamanaktif<$jumlahdatahalaman):?>
    <a href="?halaman=<?=$halamanaktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>
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
            <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
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