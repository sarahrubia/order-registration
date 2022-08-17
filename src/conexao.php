<?php

$source = "localhost";
$username = "root";
$password = "1234";
$database = "cadastro";

$conn = mysqli_connect($source, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Erro na conexão: " . mysqli_connect_error();
} else {
    echo "Conexão ok!";
}