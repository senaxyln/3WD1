<?php
session_start();
require_once 'config.php';

// Periksa role admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Proses tambah barang
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = null;

    // Proses upload gambar
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $imageName = time() . '_' . basename($_FILES['image']['name']);
        $imagePath = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            $image = $imageName;
        }
    }

    try {
        $connection = getConnection();
        $sql = "INSERT INTO products (name, description, price, image) VALUES (:name, :description, :price, :image)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':price', $price);
        $statement->bindParam(':image', $image);
        $statement->execute();
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

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
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Dashboard Admin</h1>
    <h2>Tambah Barang</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Nama Barang:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="description">Deskripsi:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="price">Harga:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        <label for="image">Gambar:</label><br>
        <input type="file" id="image" name="image" required><br><br>
        <button type="submit">Tambah Barang</button>
    </form>

    <h2>Daftar Barang</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $product): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($product['name']); ?></td>
                    <td><?= htmlspecialchars($product['description']); ?></td>
                    <td><?= number_format($product['price'], 2); ?></td>
                    <td>
                        <?php if ($product['image']): ?>
                            <img src="uploads/<?= htmlspecialchars($product['image']); ?>" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="edit_product.php?id=<?= $product['id']; ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
