<?php

// Informasi tentang PHP
// phpinfo();

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    // Menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
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

// Query untuk membuat tabel customers
/*
CREATE TABLE customers
(
    id VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE comments
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    comment TEXT,
    PRIMARY KEY (id)
) ENGINE = InnoDB;
*/

// Menambahkan data ke tabel customers
$connection = getConnection();
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('eko', 'Eko', 'eko@test.com');
SQL;
$connection->exec($sql);
$connection = null;

// Mendapatkan data dari tabel customers
$connection = getConnection();
$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
$connection = null;

// Menampilkan data dari tabel customers
$connection = getConnection();
$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
foreach ($result as $row) {
    var_dump($row);
}
$connection = null;

// Contoh login sederhana (tidak aman)
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $connection->query($sql);

// Contoh login dengan SQL Injection
$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$result = $connection->prepare($sql);
$result->bindParam("username", $username);
$result->bindParam("password", $password);
$result->execute();

// Login dengan parameterized query
$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->bindParam(1, $username);
$result->bindParam(2, $password);
$result->execute();

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

// Function Fetch()
$succes = false;
if ($row = $result->fetch()) {
    echo "SUKSES LOGIN : " . $row["username"] . PHP_EOL;
} else {
    echo "GAGAL LOGIN" . PHP_EOL;
}

// Function Fetch All()
$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
$customers = $result->fetchAll();

$succes = false;
foreach ($result as $row) {
    $succes = true;
}
if ($succes) {
    echo "SUKSES LOGIN" . PHP_EOL;
} else {
    echo "GAGAL LOGIN" . PHP_EOL;
}

// Contoh SQL Injection dengan quote()
$username = $connection->quote("admin'; #");
$password = $connection->quote("admin");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";
$result = $connection->query($sql);

// Menambahkan komentar ke tabel comments (salah penulisan query)
/*
$connection = getConnection();
$connection->exec("INSERT INTO comments(email, comment VALUES ('eko@test.com', 'hi')");
$id = $connection->lastInsertId();
var_dump($id);
*/

$connection = null;