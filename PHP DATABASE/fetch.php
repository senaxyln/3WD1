$username   = "admin";
$password = "admin";

$sql    ="SELECT * FROM admin WHERE username = ? AND password = ?";
 $result = $connection->prepare($sql);
 $result->execute([$username, $password]);

 if  ($row = $result ->fetch ()) {
     echo "SUKSES LOGIN : " . $row["username"] . PHP_EOL;
 }else {
     echo "GAGAL LOGIN". PHP_EOL;
 }