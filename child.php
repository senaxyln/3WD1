<?php
include_once "person.php";

class Faculty extends Person {
    public $nip;

    public function __construct($nama, $alamat, $kota, $nip) {
        // Memanggil konstruktor parent (Person)
        parent::__construct($nama, $alamat, $kota);
        $this->nip = $nip;
    }
}

class Student extends Person {
    public $nis;

    public function __construct($nama, $alamat, $kota, $nis) {
        // Memanggil konstruktor parent (Person)
        parent::__construct($nama, $alamat, $kota);
        $this->nis = $nis;
    }
}

// Membuat objek Student
$fikri = new Student("Fikri", "jalan dua", "depok", "1000001");

echo "NIS: " . $fikri->nis . "<br>";
echo "Nama: " . $fikri->nama . "<br>";
echo "Alamat: " . $fikri->alamat . "<br>";
echo "Kota: " . $fikri->kota . "<br><br>";

// Membuat objek Faculty
$tom = new Faculty("Tom", "UI", "Depok", "2007110");

echo "Nama: " . $tom->nama . "<br>";
echo "NIP: " . $tom->nip . "<br>";