<?php
// Class BangunDatar sebagai kelas dasar
abstract class BangunDatar {
    protected $luas;
    protected $keliling;

    // Method abstrak untuk menghitung luas
    abstract public function hitungLuas();

    // Method abstrak untuk menghitung keliling
    abstract public function hitungKeliling();

    // Method untuk menampilkan hasil luas
    public function getLuas() {
        return $this->luas;
    }

    // Method untuk menampilkan hasil keliling
    public function getKeliling() {
        return $this->keliling;
    }
}

// Kelas Persegi
class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        $this->luas = $this->sisi * $this->sisi;
    }

    public function hitungKeliling() {
        $this->keliling = 4 * $this->sisi;
    }
}

// Kelas Segitiga
class Segitiga extends BangunDatar {
    private $alas;
    private $tinggi;
    private $sisi1;
    private $sisi2;
    private $sisi3;

    public function __construct($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;
        $this->sisi3 = $sisi3;
    }

    public function hitungLuas() {
        $this->luas = 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling() {
        $this->keliling = $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
}

// Kelas Lingkaran
class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        $this->luas = pi() * pow($this->jariJari, 2);
    }

    public function hitungKeliling() {
        $this->keliling = 2 * pi() * $this->jariJari;
    }
}

// Contoh penggunaan
$persegi = new Persegi(5);
$persegi->hitungLuas();
$persegi->hitungKeliling();
echo "Persegi - Luas: " . $persegi->getLuas() . ", Keliling: " . $persegi->getKeliling() . "\n";
echo "<br>";

$segitiga = new Segitiga(3, 4, 3, 4, 5);
$segitiga->hitungLuas();
$segitiga->hitungKeliling();
echo "Segitiga - Luas: " . $segitiga->getLuas() . ", Keliling: " . $segitiga->getKeliling() . "\n";
echo "<br>";

$lingkaran = new Lingkaran(7);
$lingkaran->hitungLuas();
$lingkaran->hitungKeliling();
echo "Lingkaran - Luas: " . $lingkaran->getLuas() . ", Keliling: " . $lingkaran->getKeliling() . "\n";
echo "<br>";