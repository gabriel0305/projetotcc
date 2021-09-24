<?php
require 'db_config.php';

$sql = "SELECT * FROM aluno WHERE deletado_em IS NULL";

$retornoSQL = mysqli_query($conexao, $sql);


?>
<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios Etec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;700&display=swap" rel="stylesheet">

</head>

<body class="container back-color">

    <div class=" nav-top">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="img/sitelogo.png" class="logo">
            </a>

            <ul class="nav nav-pills barra">
                <li class="nav-item"><a href="index.html" class="nav-link itenbarra">Inicio</a></li>
                <li class="nav-item"><a href="decisao.html" class="nav-link itenbarra">Cadastro</a></li>

            </ul>
        </header>
    </div>

    <div class="container">
        <h1>Lista de Alunos<a class="botao float-right" href="cadastro.php">Novo Cliente</a>
        </h1>
        <br><br><br>

        <table>
            <tread>
                <tr>
                    <th>#</th>
                    <th>NOME</th>
                    <th>GENERO</th>
                    <th>NASCIMENTO</th>
                    <th>CPF</th>
                    <th>CELULAR</th>
                    <th>EMAIL</th>
                    <th>CURSO</th>
                    <th>AÇÕES</th>
                </tr>
            </tread>

            <tbody>
                <?php
                while ($dados = mysqli_fetch_array($retornoSQL)) {
                    ?>

                        <tr>
                            <td class="text-center"><?= $dados['id'] ?></td>
                            <td><?= $dados['nome'] ?></td>
                            <td class="text-center"><?= $dados['genero'] ?></td>
                            <td class="text-center"><?= date('d/m/Y', strtotime($dados['data_nascimento'])) ?></td>
                            <td class="text-center"><?= $dados['cpf'] ?></td>
                            <td class="text-center"><?= $dados['telefone'] ?></td>
                            <td><?= $dados['email'] ?></td>
                            <td class="text-center"><?= $dados['curso'] ?></td>
                            <td class="text-center">
                                <a href=# class="button">ALTERAR</a>
                                <button type="button" class="button">EXCLUIR</button>
                            </td>
                        </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>