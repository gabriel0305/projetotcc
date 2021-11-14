<?php
require 'db_empresa_config.php';

$sql = "SELECT * FROM empresa WHERE deletado_em IS NULL";

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

        <h1 class="red" style="text-align: center;">Perfil</h1>
        <br>
        <br>
        <br>

        <?php
        while ($dados = mysqli_fetch_array($retornoSQL)) {
        ?>

            <div class="perfil_p">
            
                <img src="img/etecescola.jpg" class="d-block mx-lg-auto img-fluid perfilf rounded-circle perfil_i" alt="Bootstrap Themes"  loading="lazy">
                <p class="text-center"><h3 class="red">Empresa:</h3> <?= $dados['empresa'] ?></p>
                <p class="text-center"><h3 class="red">CNPJ:</h3> <?= $dados['cnpj'] ?></p>
                <p class="text-center"><h3 class="red">E-mail:</h3> <?= $dados['email'] ?></p>
                <p class="text-center"><h3 class="red">Telefone:</h3> <?= $dados['telefone'] ?></p>
                <p class="text-center"><h3 class="red">Cidade:</h3> <?= $dados['cidade'] ?></p>
                <p class="text-center"><h3 class="red">Cep:</h3> <?= $dados['cep'] ?></p>
                <p class="text-center">
                    <a href="alterar.php<?= $id ?>" class="botao">ALTERAR</a>
                    <button type="button" class="botao">EXCLUIR</button>
                </p>
        </div>

        <?php
        }
        ?>

<div class="perfil_s">
        <form method="POST" action="#">
            <div class="superior">
                <h2>Qual estagio a sua empresa quer anunciar?</h2>
            </div>

            <div class=" conteudo perfil_a">
                <div class="form-input">
                    <label for="area">Area do estagio: </label>
                    <select name="area" id="area" style="float: right;">
                        <option value="">--SELECIONE--</option>
                        <option value="I">Informática</option>
                        <option value="R">Recursos Humanos</option>
                        <option value="C">Comércio</option>
                        <option value="A">Administração</option>
                        <option value="S">Serviços Jurídicos</option>
                        <option value="L">Logística</option>
                    </select>
                </div><br>
                <div class="form-input">
                    <label for="horario">Carga Horaria do seu estagiario:</label>
                    <input id="horario" required name="horario" type="time" class="form-input"  style="float: right;">
                </div><br>

                <div class="form-input">
                    <label for="salario">Salario que seu estagiario irá receber:</label>
                    <input id="horario" required name="horario" type="number" min="0.01" step="0.01" class="form-input"  style="float: right;">
                </div><br>
                <a href="#" class="botao text-align " style="float: left;">DIVULGAR VAGA</a>
            </div>
        </form>

    </div>
    
    
</body>

</html>