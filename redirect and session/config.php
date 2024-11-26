<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "log_in";
    $username = "root";
    $password = "";

    try {
        $dsn = "mysql:host=$host;port=$port;dbname=$database";
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $exception) {
        die("Koneksi gagal: " . $exception->getMessage());
    }
}
?>
