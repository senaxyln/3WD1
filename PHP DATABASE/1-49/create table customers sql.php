<?php

require_once 'config.php'; // Memanggil file koneksi

try {
    $connection = getConnection();

    // Query SQL untuk membuat tabel customers
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS customers (
        id VARCHAR(100) NOT NULL,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE = InnoDB;
SQL;

    // Eksekusi query
    $connection->exec($sql);
    echo "Tabel 'customers' berhasil dibuat." . PHP_EOL;

    $connection = null; // Menutup koneksi
} catch (PDOException $exception) {
    // Menangani error
    echo "Gagal membuat tabel: " . $exception->getMessage() . PHP_EOL;
}