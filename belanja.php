<?php
// Harga barang
$buah = 50000;
$sayur = 100000;
$gula = 15000;

// Total belanja
$totalBelanja = $buah + $sayur + $gula;

// Diskon 5%
$diskon = 0.05 * $totalBelanja;

// Total setelah diskon
$totalSetelahDiskon = $totalBelanja - $diskon;

// Menampilkan hasil
echo "Buah = 50000" . "<br>";
echo "Sayur = 100000" . "<br>";
echo "Gula = 15000" . "<br>";
echo "Total belanja sebelum diskon: Rp " . $totalBelanja . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Total belanja setelah diskon: Rp " . $totalSetelahDiskon;