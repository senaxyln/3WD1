<?php
// Kelas induk Rekening
class Rekening {
    protected $noRek;
    protected $saldo;

    public function __construct($noRek, $saldo = 0) {
        $this->noRek = $noRek;
        $this->saldo = $saldo;
    }

    // Fungsi untuk menabung
    public function nabung($uang) {
        $this->saldo += $uang;
        echo "Menabung: +$uang. Saldo saat ini: " . $this->cekSaldo() . "<br>";
        return $this->saldo;
    }

    // Fungsi untuk menarik uang
    public function tarik($uang) {
        if ($uang > $this->saldo) {
            echo "Saldo tidak mencukupi untuk penarikan.<br>";
            return $this->saldo;
        }
        $this->saldo -= $uang;
        echo "Menarik: -$uang. Saldo saat ini: " . $this->cekSaldo() . "<br>";
        return $this->saldo;
    }

    // Fungsi untuk cek saldo
    public function cekSaldo() {
        return $this->saldo;
    }
}

// Kelas Rekening Tabungan, turunan dari Rekening
class RekeningTabungan extends Rekening {
    private $potonganBulanan;

    public function __construct($noRek, $saldo = 0, $potonganBulanan) {
        parent::__construct($noRek, $saldo);
        $this->potonganBulanan = $potonganBulanan;
    }

    // Fungsi untuk menerapkan potongan bulanan
    public function potongBulanan() {
        $this->saldo -= $this->potonganBulanan;
        echo "Potongan Bulanan: -$this->potonganBulanan. Saldo saat ini: " . $this->cekSaldo() . "<br>";
        return $this->saldo;
    }
}

// Kelas Rekening Deposito, turunan dari Rekening
class RekeningDeposito extends Rekening {
    private $bunga;

    public function __construct($noRek, $saldo = 0, $bunga = 5) {
        parent::__construct($noRek, $saldo);
        $this->bunga = $bunga;
    }

    // Fungsi untuk menambahkan bunga dengan persentase tertentu
    public function tambahBunga($persen = null) {
        $persentase = $persen ?? $this->bunga;
        $tambahan = $this->saldo * ($persentase / 100);
        $this->saldo += $tambahan;
        echo "Tambahan Bunga $persentase%: +$tambahan. Saldo saat ini: " . $this->cekSaldo() . "<br>";
        return $this->saldo;
    }
}

// Contoh penggunaan kode

// Membuat objek RekeningTabungan untuk Tom dan Irvan
$tom = new RekeningTabungan("123456", 5000000, 50000);
$irvan = new RekeningTabungan("123457", 3000000, 50000);

// Membuat objek RekeningDeposito untuk Fikri dan Lini
$fikri = new RekeningDeposito("123458", 10000000, 5); // 5% bunga
$lini = new RekeningDeposito("10001", 500000, 5); // 5% bunga

echo "=== Rekening Tabungan ===<br>";
echo "Saldo awal Tom: " . $tom->cekSaldo() . "<br>";
$tom->nabung(100000);
$tom->tarik(50000);
$tom->potongBulanan();
echo "Saldo akhir Tom: " . $tom->cekSaldo() . "<br><br>";

echo "Saldo awal Irvan: " . $irvan->cekSaldo() . "<br>";
$irvan->nabung(200000);
$irvan->tarik(100000);
$irvan->potongBulanan();
echo "Saldo akhir Irvan: " . $irvan->cekSaldo() . "<br><br>";

echo "=== Rekening Deposito ===<br>";
echo "Saldo awal Fikri: " . $fikri->cekSaldo() . "<br>";
$fikri->tambahBunga();
echo "Saldo akhir Fikri: " . $fikri->cekSaldo() . "<br><br>";

echo "Saldo awal Lini: " . $lini->cekSaldo() . "<br>";
$lini->nabung(500000);
$lini->tambahBunga(10);
echo "Saldo akhir Lini: " . $lini->cekSaldo() . "<br>";