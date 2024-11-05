<?php
include_once "person.php";

$joko = new Person();
$joko->nama = "joko";
$joko->alamat = "jalan Lenteng Agung";
$joko->kota = "Depok";

echo $joko->nama;
echo "<br>";
echo $joko->alamat;
echo "<br>";
echo $joko->kota;