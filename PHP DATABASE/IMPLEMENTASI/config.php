<?php

// Konfigurasi Database
define("DB_HOST", "localhost");
define("DB_PORT", 3306);
define("DB_NAME", "belajar_php_database");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

/**
 * Fungsi untuk membuat koneksi ke database menggunakan PDO.
 * @return PDO
 */
function getConnection(): PDO
{
    try {
        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
        $connection = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Mode error exception
        return $connection;
    } catch (PDOException $exception) {
        die("Koneksi gagal: " . $exception->getMessage());
    }
}

// Konfigurasi lainnya (jika diperlukan)
// define("BASE_URL", "http://localhost/3WD1/");
// define("APP_NAME", "PHP MySQL Database");
?>