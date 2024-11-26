<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    try {
        $connection = getConnection();
        $sql = "INSERT INTO customers (id, name, email) VALUES (:id, :name, :email)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->execute();

        echo "Data berhasil ditambahkan!";
    } catch (PDOException $exception) {
        echo "Error: " . $exception->getMessage();
    } finally {
        $connection = null; // Menutup koneksi
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data Customers</h1>
    <form action="" method="POST">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" required><br><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>