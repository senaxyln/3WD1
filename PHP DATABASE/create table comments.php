<?php

require_once 'connection.php'; // Memanggil file koneksi

try {
    $connection = getConnection();

    // Query SQL untuk membuat tabel comments
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS comments (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        comment TEXT,
        PRIMARY KEY (id)
    ) ENGINE = InnoDB;
SQL;

    // Eksekusi query
    $connection->exec($sql);
    echo "Tabel 'comments' berhasil dibuat." . PHP_EOL;

    $connection = null; // Menutup koneksi
} catch (PDOException $exception) {
    // Menangani error
    echo "Gagal membuat tabel: " . $exception->getMessage() . PHP_EOL;
}