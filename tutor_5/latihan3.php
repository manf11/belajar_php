<?php
$mahasiswa = [["ahlis","10416069","sistem informasi","ahlis@gmail.com"],["sahal","10416079","sistem informasi","ahlis@gmail.com"],["nor","10416111","sistkom","nor@gmail.com"]];
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

<?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>nama : <?= $mhs [0]; ?></li>
        <li>npm : <?= $mhs [1]; ?></li>
        <li>jurusan : <?= $mhs [2]; ?></li>
        <li>email : <?= $mhs [3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>