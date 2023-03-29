<?php
$host = 'localhost';
$dbname = 'tcc';
$user = 'root';
$password = '';

// cria uma conexão MySQLi
$conn = new mysqli($host, $user, $password, $dbname);

// verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão realizada com sucesso!";
?>
