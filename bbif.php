<?php
$tinggi = 170; // Tinggi badan dalam cm
$beratBadan = 65; // Berat badan yang dimiliki (bisa diinputkan)

$beratIdeallk = ($tinggi - 100) - (($tinggi - 100) * 0.1);
$beratIdealpr = ($tinggi - 100) - (($tinggi - 100) * 0.15);

// Mengecek apakah laki-laki atau perempuan
$jenisKelamin = "laki-laki"; // "laki-laki" atau "perempuan"

if ($jenisKelamin == "laki-laki") {
    echo "Jadi berat badan ideal laki-laki adalah " . $beratIdeallk . " kg.<br>";
    
    if ($beratBadan == $beratIdeallk) {
        echo "Berat badan anda ideal.";
    } elseif ($beratBadan > $beratIdeallk) {
        echo "Berat badan anda di atas ideal.";
    } else {
        echo "Berat badan anda di bawah ideal.";
    }
} elseif ($jenisKelamin == "perempuan") {
    echo "Jadi berat badan ideal perempuan adalah " . $beratIdealpr . " kg.<br>";
    
    if ($beratBadan == $beratIdealpr) {
        echo "Berat badan anda ideal.";
    } elseif ($beratBadan > $beratIdealpr) {
        echo "Berat badan anda di atas ideal.";
    } else {
        echo "Berat badan anda di bawah ideal.";
    }
} else {
    echo "Jenis kelamin tidak valid.";
}