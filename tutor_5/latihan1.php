<?php
//cara lama
$hari = array ("senin","selasa","rabu");
//cara baru
$bulan = ["januari","februari","maret"];
$arr1  = [123,"tulisan", false];
// var_dump($bulan);
// echo "<br>";
// print_r($hari);
// //menampilkan 1 elemen
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
?>