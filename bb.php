<?php
$tinggi = 170; // Tinggi badan dalam cm

$beratIdeallk = ($tinggi - 100) - (($tinggi - 100) * 0.1);
$beratIdealpr = ($tinggi - 100) - (($tinggi - 100) * 0.15);


echo "Jadi berat badan ideal laki-laki adalah " . $beratIdeallk . " kg.";
echo "<br>";
echo "Jadi berat badan ideal perempuan adalah " . $beratIdealpr . " kg.";