<?php

require_once 'config_tugas1.php'; // Memanggil file koneksi

try {
    $connection = getConnection();

    // Query SQL untuk membuat tabel admin
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS admin (
        username VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        PRIMARY KEY (username)
    ) ENGINE = InnoDB;
SQL;

    // Eksekusi query
    $connection->exec($sql);
    echo "Tabel 'admin' berhasil dibuat." . PHP_EOL;

    $connection = null; // Menutup koneksi
} catch (PDOException $exception) {
    // Menangani error
    echo "Gagal membuat tabel: " . $exception->getMessage() . PHP_EOL;
}