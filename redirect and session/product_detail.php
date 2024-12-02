<?php
require_once 'config.php';

if (!isset($_GET['id'])) {
    die("ID produk tidak ditemukan.");
}

$id = $_GET['id'];

try {
    $connection = getConnection();
    $sql = "SELECT * FROM products WHERE id = :id";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $product = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("Produk tidak ditemukan.");
    }
} catch (PDOException $exception) {
    die("Error: " . $exception->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
</head>
<body>
    <h1>Detail Barang</h1>
    <p><strong>Nama:</strong> <?= htmlspecialchars($product['name']); ?></p>
    <p><strong>Deskripsi:</strong> <?= htmlspecialchars($product['description']); ?></p>
    <p><strong>Harga:</strong> <?= number_format($product['price'], 2); ?></p>
    <p>
        <strong>Gambar:</strong><br>
        <?php if ($product['image']): ?>
            <img src="uploads/<?= htmlspecialchars($product['image']); ?>" width="300">
        <?php endif; ?>
    </p>
    <a href="user_dashboard.php">Kembali ke Dashboard</a>
</body>
</html>
