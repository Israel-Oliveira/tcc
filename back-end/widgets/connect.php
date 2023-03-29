<?php
$host = 'localhost';
$dbname = 'tcc';
$user = 'root';
$password = '';

// cria uma conexão MySQLi
$connPdo = new \PDO('mysql: host='.$host.'; dbname='.$dbname, $user, $password);

?>
