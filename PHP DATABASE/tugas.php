<?php

// phpinfo();

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    //menutup koneksi
    $connection = null;
} catch (PDOException $exception){
    echo "Error terkoneksi ke database :" . $exception->getMessage() . PHP_EOL;
}

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

CREATE TABLE customers
(
    id VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('eko', 'Eko', 'eko@test.com');
SQL;

$connection->exec($sql);

$connection = null;

$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

$connection = null;

$connection = getConnection();

$sql = "SELECT *FROM customers";
 $result = $connection->query($sql);
 foreach ($result as $row) {
     var_dump($row);
 }
$connection = null;

$username   = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE"

