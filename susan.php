<?php
include_once"person.php";

$susan = new Person();
$susan->nama = "Susan";
$susan->alamat = "Bekasi TImur";
$susan->kota = "Bekasi";

echo $susan->nama;
echo "<br>";
echo $susan->alamat;
echo "<br>";
echo $susan->kota;
?>