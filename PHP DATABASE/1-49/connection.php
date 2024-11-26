<?php

// phpinfo();

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;
