<?php
// Kelas induk Pegawai
class Pegawai {
    protected $nama;
    protected $gajiPokok;

    public function __construct($nama, $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    // Metode untuk mencetak informasi pegawai
    public function infoPegawai() {
        echo "Nama: {$this->nama}, Gaji Pokok: {$this->gajiPokok}<br>";
    }
}

// Kelas KaryawanTetap yang meng-extend Pegawai
class KaryawanTetap extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gajiPokok, $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    // Metode untuk mencetak informasi tunjangan karyawan tetap
    public function infoTunjangan() {
        echo "Tunjangan: {$this->tunjangan}<br>";
    }
}

// Kelas Freelance yang meng-extend Pegawai
class Freelance extends Pegawai {
    private $jamKerja;
    private $upahPerJam;

    public function __construct($nama, $jamKerja, $upahPerJam) {
        parent::__construct($nama, 0); // Freelance tidak memiliki gaji pokok
        $this->jamKerja = $jamKerja;
        $this->upahPerJam = $upahPerJam;
    }

    // Metode untuk menghitung total gaji freelance
    public function hitungGaji() {
        $totalGaji = $this->jamKerja * $this->upahPerJam;
        echo "Jam Kerja: {$this->jamKerja}, Upah per Jam: {$this->upahPerJam}<br>";
        echo "Total Gaji: {$totalGaji}<br>";
    }
}

// Contoh penggunaan
// Membuat objek KaryawanTetap
$karyawanTetap = new KaryawanTetap("Ali", 5000000, 1000000);
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();
echo "<br>";

// Membuat objek Freelance
$freelancer = new Freelance("Budi", 50, 100000);
$freelancer->infoPegawai();
$freelancer->hitungGaji();