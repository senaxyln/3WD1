<?php

// Kelas AlatMusik
class AlatMusik {
    public function bunyi() {
        return "Bunyi alat musik";
    }
}

// Kelas Gitar yang mengextends AlatMusik
class Gitar extends AlatMusik {
    public function bunyi() {
        return "Jreng";
    }
}

// Kelas Drum yang mengextends AlatMusik
class Drum extends AlatMusik {
    public function bunyi() {
        return "Dum dum";
    }
}

// Fungsi untuk memainkan musik
function mainkanMusik(AlatMusik $alat) {
    echo $alat->bunyi() . PHP_EOL;
}

// Membuat objek Gitar dan Drum
$gitar = new Gitar();
$drum = new Drum();

// Memanggil fungsi mainkanMusik untuk kedua objek
mainkanMusik($gitar); // Output: Jreng
echo "<br>";
mainkanMusik($drum);  // Output: Dum dum