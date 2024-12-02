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

    // Hapus produk dari database
    $sql = "DELETE FROM products WHERE id = :id";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();

    header("Location: admin_dashboard.php");
    
    exit();
} catch (PDOException $exception) {
    die("Error: " . $exception->getMessage());
}
?>
