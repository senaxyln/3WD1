<?php
session_start();
require_once 'config.php';

// Periksa role admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Periksa jika ada ID produk
if (!isset($_GET['id'])) {
    die("ID produk tidak ditemukan.");
}

$id = $_GET['id'];

try {
    $connection = getConnection();

    // Ambil data produk berdasarkan ID
    $sql = "SELECT * FROM products WHERE id = :id";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $product = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("Produk tidak ditemukan.");
    }

    // Proses update produk
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $product['image']; // Gunakan gambar lama jika tidak ada yang baru

        // Cek jika ada file yang diunggah
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            $imageName = time() . '_' . basename($_FILES['image']['name']);
            $imagePath = $uploadDir . $imageName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $image = $imageName;
            }
        }

        // Update produk di database
        $sql = "UPDATE products SET name = :name, description = :description, price = :price, image = :image WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':price', $price);
        $statement->bindParam(':image', $image);
        $statement->bindParam(':id', $id);
        $statement->execute();

        header("Location: admin_dashboard.php");
        exit();
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
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Nama Barang:</label><br>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']); ?>" required><br><br>
        <label for="description">Deskripsi:</label><br>
        <textarea id="description" name="description" required><?= htmlspecialchars($product['description']); ?></textarea><br><br>
        <label for="price">Harga:</label><br>
        <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price']); ?>" required><br><br>
        <label for="image">Gambar (Kosongkan jika tidak ingin mengganti):</label><br>
        <input type="file" id="image" name="image"><br><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="admin_dashboard.php">Kembali ke Dashboard</a>
    <a href="admin/edit_product.php?id=<?= $product['id']; ?>">Edit</a>
</body>
</html>
