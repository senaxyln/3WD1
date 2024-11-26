$username   = "admin";
$password = "admin";

//Function Fetch All()
 $sql    ="SELECT * FROM customers";
 $result =$connection->query($sql);
 $customers = $result->fetchAll();

var_dump($id);