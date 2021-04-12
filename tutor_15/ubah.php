<?php
require 'functions.php';

$id = $_GET["id"];
//query data berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if ( isset ($_POST["submit"]) ) {


//     //CEK ERROR
if (ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
//     if(myqsqli_affected_rows($conn) >0 ){
//         echo "berhasil";
//     } else {
//         echo "gagal";
//         echo "<br>";
//         echo mysqli_error($conn);
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="npm">npm :</label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar :</label>
                <img src="img/<?= $mhs['gambar']; ?>"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>