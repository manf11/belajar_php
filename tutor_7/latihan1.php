<?php
//$_GET
// $_GET["nama"] = "ahlis";
// $_GET["npm"] = "10416069";
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
        "npm" =>"104002",
        "email"=>"sahal@",
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
    <title>GET</title>
</head>
<body>
<h1>daftar mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) :?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &npm=<?= $mhs["npm"]; ?>
        &email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>">
        <?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>