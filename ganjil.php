<?php
    for($i = 1; $i <= 100; $i++) {
        if($i % 2 != 0){
            echo $i . ", ";
        }
    }
    echo "<br>";
    for($i = 1; $i <= 100; $i *= 2) {
        if($i != 1){
            echo $i . ", ";
        }
    }
    echo "<br>";
    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0){
            echo "Buzz";
        }elseif($i % 5 == 0){
            echo "Flash";
        }elseif($i % 3 == 0 && $i % 5 == 0){
            echo "FlashBuzz";
        }else{
            echo $i . ", ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <?php
        // Array produk
        $produk = [
            [
                'nama' => 'Produk 1',
                'deskripsi' => 'Sikagrout terbaik sepanjang masa.',
                'harga' => 100000,
                'gambar' => 'produk1.jpeg'
            ],
            [
                'nama' => 'Produk 2',
                'deskripsi' => 'Cat besar warna putih 20 KG.',
                'harga' => 150000,
                'gambar' => 'produk2.jpeg'
            ],
            [
                'nama' => 'Produk 3',
                'deskripsi' => 'Sikacim berkualitas.',
                'harga' => 200000,
                'gambar' => 'produk3.jpeg'
            ],
            [
                'nama' => 'Produk 4',
                'deskripsi' => 'Sikament paling ampuh.',
                'harga' => 250000,
                'gambar' => 'produk4.jpeg'
            ],
            [
                'nama' => 'Produk 5',
                'deskripsi' => 'Deskripsi produk 5 yang inovatif.',
                'harga' => 300000,
                'gambar' => 'produk5.jpeg'
            ],
            [
                'nama' => 'Produk 6',
                'deskripsi' => 'Cat besar warna Gold 20 KG.',
                'harga' => 350000,
                'gambar' => 'produk2.jpeg'
            ]
        ];

        foreach ($produk as $item) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $item['gambar']; ?>" class="card-img-top w-75 mx-auto mt-3" alt="Gambar Produk">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['nama']; ?></h5>
                        <p class="card-text"><?php echo $item['deskripsi']; ?></p>
                        <p class="card-text"><strong>Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></strong></p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

</body>
</html>