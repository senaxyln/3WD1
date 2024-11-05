<?php
// Class Mahasiswa
class Mahasiswa {
    private $nim;
    private $nama;
    private $nilai;
    private $keterangan;

    // Constructor untuk inisialisasi data mahasiswa
    public function __construct($nim, $nama, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->setKeterangan();
    }

    // Method untuk menentukan keterangan lulus atau tidak
    private function setKeterangan() {
        $this->keterangan = ($this->nilai > 70) ? "Lulus" : "Tidak Lulus";
    }

    // Method untuk mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }

    // Method untuk mendapatkan Nama
    public function getNama() {
        return $this->nama;
    }

    // Method untuk mendapatkan Nilai
    public function getNilai() {
        return $this->nilai;
    }

    // Method untuk mendapatkan Keterangan
    public function getKeterangan() {
        return $this->keterangan;
    }
}

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("2023001", "Budi", 75);
$mahasiswa2 = new Mahasiswa("2023002", "Susan", 65);
$mahasiswa3 = new Mahasiswa("2023003", "Santi", 80);

// Memasukkan objek mahasiswa ke dalam array
$mahasiswaList = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kelulusan Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Status Kelulusan Mahasiswa</h2>

<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Keterangan</th>
    </tr>
    <?php foreach ($mahasiswaList as $mahasiswa): ?>
        <tr>
            <td><?php echo $mahasiswa->getNim(); ?></td>
            <td><?php echo $mahasiswa->getNama(); ?></td>
            <td><?php echo $mahasiswa->getNilai(); ?></td>
            <td><?php echo $mahasiswa->getKeterangan(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>