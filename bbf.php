<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hitung Berat Badan Ideal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
<body>
<div class="container mt-5">
    <h2 class="mb-4">Cek Berat Badan Ideal</h2>
    
    <form method="post" action="">
        <div class="mb-3">
            <label for="tinggi" class="form-label">Tinggi Badan (cm):</label>
            <input type="text" class="form-control" id="tinggi" name="tinggi" required>
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">Berat Badan (kg):</label>
            <input type="text" class="form-control" id="berat" name="berat" required>
        </div>
        <div class="mb-3">
            <label for="jenisKelamin" class="form-label">Jenis Kelamin:</label>
            <select class="form-control" id="jenisKelamin" name="jenisKelamin" required>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan input dari form
        $tinggi = $_POST['tinggi'];
        $berat = $_POST['berat'];
        $jenisKelamin = $_POST['jenisKelamin'];

        // Menghitung berat badan ideal
        if ($jenisKelamin == 'pria') {
            $beratIdeal = ($tinggi - 100) - (($tinggi - 100) * 0.1); // Rumus Broca untuk pria
        } else {
            $beratIdeal = ($tinggi - 100) - (($tinggi - 100) * 0.15); // Rumus Broca untuk wanita
        }

        // Menampilkan hasil
        echo '<div class="alert alert-info mt-4">';
        echo "<h4>Hasil Perhitungan</h4>";
        echo "Berat badan ideal untuk " . $jenisKelamin . " dengan tinggi " . $tinggi . " cm adalah " . $beratIdeal . " kg.<br>";

        // Cek apakah berat badan ideal atau tidak
        if ($berat == $beratIdeal) {
            echo "Berat badan Anda ideal Good job.";
        } elseif ($berat < $beratIdeal) {
            echo "Berat badan Anda kurang ideal, sebaiknya tambah porsi makan anda. Berat badan ideal Anda adalah " . $beratIdeal . " kg.";
        } else {
            echo "Berat badan Anda berlebih, sebaiknya anda berolahraga. Berat badan ideal Anda adalah " . $beratIdeal . " kg.";
        }
        echo '</div>';
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7AxqlPVFQQiAaOnlFbEVafTqEvoS3w+eytmE11uEtmnUJvgtlcEKJZyPTsXMaCZg" crossorigin="anonymous"></script>
</body>
</html>