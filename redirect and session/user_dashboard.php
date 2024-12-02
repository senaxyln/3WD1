<?php
require_once 'config.php';

// Ambil data barang
try {
    $connection = getConnection();
    $sql = "SELECT * FROM products";
    $products = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $exception) {
    die("Error: " . $exception->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Dashboard User</h1>
    <h2>Daftar Barang</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $product): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td>
                        <a href="product_detail.php?id=<?= $product['id']; ?>">
                            <?= htmlspecialchars($product['name']); ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($product['description']); ?></td>
                    <td><?= number_format($product['price'], 2); ?></td>
                    <td>
                        <?php if ($product['image']): ?>
                            <img src="uploads/<?= htmlspecialchars($product['image']); ?>" width="100">
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
