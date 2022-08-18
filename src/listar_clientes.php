<?php

require('conexao.php');

$sql = "SELECT * FROM clientes";
$stmt = $conn -> query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Lista de Clientes</title>
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand fs-2"> <i class="bi bi-people"></i>Lista de Clientes</a>
            <ul class="navbar-nav">
                <li class="nav-item m-2 text-white">
                    <a href="#" class="text-reset text-decoration-none fs-5">Cadastro de Clientes</a>
                </li>
                <li class="nav-item m-2 text-white">
                    <a href="#" class="text-reset text-decoration-none fs-5">Pedidos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5 col-10">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($dados = $stmt -> fetch(PDO::FETCH_ASSOC)) : ?>
                <tr scope="row">
                        <td><?php echo htmlspecialchars($dados['Id']); ?></td>
                        <td><?php echo htmlspecialchars($dados['NomeCliente']); ?></td>
                        <td><?php echo htmlspecialchars($dados['CPF']); ?></td>
                        <td><?php echo htmlspecialchars($dados['Email']); ?></td>
                </tr>
                </tbody>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
