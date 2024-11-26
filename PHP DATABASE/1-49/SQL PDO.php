$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('eko', 'Eko', 'eko@test.com');
SQL;

$connection->exec($sql);

$connection = null;