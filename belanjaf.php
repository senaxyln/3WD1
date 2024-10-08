<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pembelanjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
<body>
<div class="container mt-5">
    <h2 class="mb-4">Hitung Total Pembelanjaan</h2>
    
    <form method="post" action="" class="mb-4">
        <div class="mb-3">
            <label for="buah" class="form-label">Buah:</label>
            <input type="number" class="form-control" id="buah" name="buah" required>
        </div>
        <div class="mb-3">
            <label for="sayur" class="form-label">Sayur:</label>
            <input type="number" class="form-control" id="sayur" name="sayur" required>
        </div>
        <div class="mb-3">
            <label for="gula" class="form-label">Gula:</label>
            <input type="number" class="form-control" id="gula" name="gula" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan input dari form
        $buah = $_POST['buah'];
        $sayur = $_POST['sayur'];
        $gula = $_POST['gula'];

        // Total belanja sebelum diskon
        $totalBelanja = $buah + $sayur + $gula;

        // Diskon awal 5%
        $diskonAwal = 0.05 * $totalBelanja;

        // Total setelah diskon awal
        $totalSetelahDiskon = $totalBelanja - $diskonAwal;

        // Pengecekan jika total belanja setelah diskon di atas 100.000, maka diskon tambahan 10%
        $diskonTambahan = 0;
        if ($totalSetelahDiskon > 100000) {
            $diskonTambahan = 0.10 * $totalSetelahDiskon;
            $totalSetelahDiskon -= $diskonTambahan;
        }

        // Pengecekan hadiah gelas cantik jika total belanja sebelum diskon di atas 75.000
        $hadiah = $totalBelanja > 75000 ? "Anda mendapatkan hadiah gelas cantik!" : "Ayo belanja minimal RP 75.000 agar mendapatkan gelas cantik!";

        // Menampilkan hasil
        echo '<div class="alert alert-success">';
        echo "<h4>Hasil Perhitungan</h4>";
        echo "Buah = Rp " . $buah . "<br>";
        echo "Sayur = Rp " . $sayur . "<br>";
        echo "Gula = Rp " . $gula . "<br>";
        echo "Total belanja sebelum diskon: Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
        echo "Diskon awal 5%: Rp " . number_format($diskonAwal, 0, ',', '.') . "<br>";

        if ($diskonTambahan > 0) {
            echo "Diskon tambahan 10%: Rp " . number_format($diskonTambahan, 0, ',', '.') . "<br>";
        }

        echo "Total belanja setelah diskon: Rp " . number_format($totalSetelahDiskon, 0, ',', '.') . "<br>";
        echo "<strong>" . $hadiah . "</strong>";
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7AxqlPVFQQiAaOnlFbEVafTqEvoS3w+eytmE11uEtmnUJvgtlcEKJZyPTsXMaCZg" crossorigin="anonymous"></script>
</body>
</html>