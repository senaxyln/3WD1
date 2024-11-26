$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

$connection = null;