$username   = $connection->quote("admin'; #");
$password = $connection->quote("admin");

$sql    ="SELECT * FROM admin WHERE username = $username AND password = $password";
$result =$connection->query($sql);