<?php

require ('conexao.php');

try {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];

    $sql = "INSERT INTO clientes (NomeCliente, CPF, Email) values ('$nome', '$cpf', '$email')";

    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    echo "Cadastro realizado com sucesso!";
} catch (PDOException $e) {
    echo 'Error: ' . $e -> getMessage();
}