<?php
// date,untuk menampilkan tanggal dengan format tertentu
//     echo date("l, d-M-Y");
// time
//unix timestamp / epoch time
// echo time("l",time()+60*60*24*100);
// +untuk nambah hari,- untuk mengurangi hari
//echo date("l",time()+60*60*24*100);
// echo date("l",mktime(0,0,0,4,19,1996));
//strtotime
echo date ("l",strtotime("18 apr 1996"));
?>