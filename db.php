<?php

$server = "localhost:3308";
$username = "root";
$password = "tryAgain@2026";
$database = "aula";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>