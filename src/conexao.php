<?php

$host = "localhost";
$username = "root";
$password = "1234";
$database = "cadastro";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão ok!";
} catch (PDOException $e) {
    echo 'ERROR: ' . $e -> getMessage();
}

