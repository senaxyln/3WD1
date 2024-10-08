<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $names = ["Salwa", "Cyntia", "Aura", "Mutia", "Hasya "];

    $salwa = array(
        "nim" => 2320010170,
        "nama"=> "salwa",
        "jenis kelamin"=> "perempuan",
        "kelas"=> "3WD1",
        "kota asal"=> "Karawang",
    );

    $cyntia = array(
        "nim" => 2320010171,
        "nama"=> "cyntia",
        "jenis kelamin"=> "perempuan",
        "kelas"=> "3WD1",
        "kota asal"=> "Tangerang",
    );

    $aura = array(
        "nim" => 2320010172,
        "nama"=> "aura",
        "jenis kelamin"=> "perempuan",
        "kelas"=> "3WD1",
        "kota asal"=> "Malang",
    );

    $mutia = array(
        "nim" => 2320010173,
        "nama"=> "mutia",
        "jenis kelamin"=> "perempuan",
        "kelas"=> "3WD1",
        "kota asal"=> "Depok",
    );

    $hasya = array(
        "nim" => 2320010174,
        "nama"=> "hasya",
        "jenis kelamin"=> "perempuan",
        "kelas"=> "3WD1",
        "kota asal"=> "Cikarang",
    );
    ?>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>nim</th>
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>kelas</th>
            <th>kota asal</th>
        </tr>
    </thead>
    <tbody>
        
    <?php
    echo "<tr>
                <th scope='row'>" . $salwa["nim"] . "</th>
                <td>" . $salwa["nama"] . "</td>
                <td>" . $salwa["jenis kelamin"] . "</td>
                <td>" . $salwa["kelas"] . "</td>
                <td>" . $salwa["kota asal"] . "</td>
            </tr>";
    echo "<tr>
                <th scope='row'>" . $cyntia["nim"] . "</th>
                <td>" . $cyntia["nama"] . "</td>
                <td>" . $cyntia["jenis kelamin"] . "</td>
                <td>" . $cyntia["kelas"] . "</td>
                <td>" . $cyntia["kota asal"] . "</td>
            </tr>";
    echo "<tr>
                <th scope='row'>" . $aura["nim"] . "</th>
                <td>" . $aura["nama"] . "</td>
                <td>" . $aura["jenis kelamin"] . "</td>
                <td>" . $aura["kelas"] . "</td>
                <td>" . $aura["kota asal"] . "</td>
            </tr>";
    echo "<tr>
                <th scope='row'>" . $mutia["nim"] . "</th>
                <td>" . $mutia["nama"] . "</td>
                <td>" . $mutia["jenis kelamin"] . "</td>
                <td>" . $mutia["kelas"] . "</td>
                <td>" . $mutia["kota asal"] . "</td>
            </tr>";
    echo "<tr>
                <th scope='row'>" . $hasya["nim"] . "</th>
                <td>" . $hasya["nama"] . "</td>
                <td>" . $hasya["jenis kelamin"] . "</td>
                <td>" . $hasya["kelas"] . "</td>
                <td>" . $hasya["kota asal"] . "</td>
            </tr>";
            
            echo "
           <div class='col-md-4 mb-3'>
                <div class='card' style='width: 18rem;'>
                   <div class='card-body'>
                        <h5 class='card-title'>Nama: " . $salwa['nama'] . "</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>nim: ".$salwa['nim']."</li>
                        <li class='list-group-item'>nama: " . $salwa['kelas'] . "</li>
                        <li class='list-group-item'>jenis kelamin: " . $salwa['jenis kelamin'] . "</li>
                        <li class='list-group-item'>kota asal: " . $salwa['kota asal'] . "</li>
                    </ul>
                </div>
                ";

                echo "
                <div class='col-md-4 mb-3'>
                <div class='card' style='width: 18rem;'>
                   <div class='card-body'>
                        <h5 class='card-title'>Nama: " . $cyntia['nama'] . "</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>nim: ".$cyntia['nim']."</li>
                            <li class='list-group-item'>nama: " . $cyntia['kelas'] . "</li>
                            <li class='list-group-item'>jenis kelamin: " . $cyntia['jenis kelamin'] . "</li>
                            <li class='list-group-item'>kota asal: " . $cyntia['kota asal'] . "</li>
                        </ul>
                    </div>
                    ";
                echo "
                 <div class='col-md-4 mb-3'>
                <div class='card' style='width: 18rem;'>
                   <div class='card-body'>
                        <h5 class='card-title'>Nama: " . $aura['nama'] . "</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>nim: ".$aura['nim']."</li>
                            <li class='list-group-item'>nama: " . $aura['kelas'] . "</li>
                            <li class='list-group-item'>jenis kelamin: " . $aura['jenis kelamin'] . "</li>
                            <li class='list-group-item'>kota asal: " . $aura['kota asal'] . "</li>
                        </ul>
                    </div>
                    ";
                    echo "
                     <div class='col-md-4 mb-3'>
                <div class='card' style='width: 18rem;'>
                   <div class='card-body'>
                        <h5 class='card-title'>Nama: " . $mutia['nama'] . "</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>nim: ".$mutia['nim']."</li>
                                <li class='list-group-item'>nama: " . $mutia['kelas'] . "</li>
                                <li class='list-group-item'>jenis kelamin: " . $mutia['jenis kelamin'] . "</li>
                                <li class='list-group-item'>kota asal: " . $mutia['kota asal'] . "</li>
                            </ul>
                        </div>
                        ";
                        echo "
                         <div class='col-md-4 mb-3'>
                    <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>Nama: " . $hasya['nama'] . "</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>nim: ".$hasya['nim']."</li>
                                <li class='list-group-item'>nama: " . $hasya['kelas'] . "</li>
                                <li class='list-group-item'>jenis kelamin: " . $hasya['jenis kelamin'] . "</li>
                                <li class='list-group-item'>kota asal: " . $hasya['kota asal'] . "</li>
                            </ul>
                        </div>
                        ";
?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7AxqlPVFQQiAaOnlFbEVafTqEvoS3w+eytmE11uEtmnUJvgtlcEKJZyPTsXMaCZg" crossorigin="anonymous"></script>
</body>
</html>