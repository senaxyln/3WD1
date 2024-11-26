$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $connection->query($sql);

$succes = false;
 foreach ($result as $row) {
     $succes = true;
 }
 if ($succes) {
     echo "SUKSES LOGIN". PHP_EOL;
 }else {
     echo "GAGAL LOGIN". PHP_EOL;