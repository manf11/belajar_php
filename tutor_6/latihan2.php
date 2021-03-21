<?php
// $mahasiswa = [["ahlis","10416001","ahlisnor@gmail","SI"],["ahlis","10416001","ahlisnor@gmail","Sk"]];
//
//array asso
//definis array numeerik
//keynya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama"=>"ahlis",
        "npm" =>"104001",
        "email"=>"ahlis@",
        "jurusan"=>"SI",
        "gambar"=>"aa.PNG"
    ],
    [
        "nama"=>"sahallll",
        "npm" =>"104001",
        "email"=>"ahlis@",
        "jurusan"=>"SI",
        "tugas" => [90,80,100],
        "gambar" =>"ipk.PNG"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img\<?= $mhs["gambar"]; ?>">
        </li>
        <li>nama : <?= $mhs["nama"];?></li>
        <li>npm : <?= $mhs["npm"];?></li>
        <li>email : <?= $mhs["email"];?></li>
        <li>jurusan : <?= $mhs["jurusan"];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>