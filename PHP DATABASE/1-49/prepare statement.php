$sql    ="SELECT * FROM admin WHERE username = :username AND password = :password";
 $result = $connection->prepare($sql);