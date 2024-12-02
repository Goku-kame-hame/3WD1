<?php
include_once "person.php";

$joko = new Person();
$joko->nama="joko";
$joko->alamat= "LA";
$joko->kota= "depok";

echo $joko->nama;
echo "<br>";
echo $joko->alamat;
echo "<br>";
echo $joko->kota;
echo "<br>";

echo $joko->say("joko");


?>