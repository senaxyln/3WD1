$username   = "admin'; #";
$password = "admin";

$sql    ="SELECT * FROM admin WHERE username = :username AND password = :password";
 $result = $connection->prepare($sql);
 $result->bindParam("username", $username);
 $result->bindParam("password", $password);
 $result->execute();

 $succes = false;
 if  ($row = $result ->fetch ()) {
     echo "SUKSES LOGIN : " . $row["username"] . PHP_EOL;
 }else {
     echo "GAGAL LOGIN". PHP_EOL;
 }