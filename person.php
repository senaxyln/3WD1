<?php
// person.php
class Person {
    public $nama;
    public $alamat;
    public $kota;

    // Konstruktor untuk kelas Person
    public function __construct($nama, $alamat, $kota) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->kota = $kota;
    }
}