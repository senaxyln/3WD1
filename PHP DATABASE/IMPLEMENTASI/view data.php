<?php
require_once 'config.php';

try {
    $connection = getConnection();
    $sql = "SELECT * FROM customers";
    $result = $connection->query($sql);

    $customers = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage();
    $customers = [];
} finally {
    $connection = null; // Menutup koneksi
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <h1>Data Customers</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($customers) > 0): ?>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= htmlspecialchars($customer['id']); ?></td>
                        <td><?= htmlspecialchars($customer['name']); ?></td>
                        <td><?= htmlspecialchars($customer['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
