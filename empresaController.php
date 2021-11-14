<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empresaController</title>
</head>

<body>

    <?php
    include('db_empresa_config.php');

    $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
    $cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : null;
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
    $cep = isset($_POST['cep']) ? $_POST['cep'] : null;
    $acao = isset($_POST['acao']) ? $_POST['acao'] : '';
    $curso = isset($_POST['curso']) ? $_POST['curso'] : '';


    if ($acao == "SALVAR") {
        $criadoEm = date('Y-m-d H:i:s');
        $editadoEm = date('Y-m-d H:i:s');

        $sql = "INSERT INTO empresa (empresa, email, senha, cnpj, telefone, cidade, cep) values ('$empresa','$email','$senha','$cnpj','$telefone', '$cidade','$cep')";

        $retornoSQL = mysqli_query($conexao, $sql);

        if ($retornoSQL == TRUE) {
            header("Location: perfil.php");
        } else {
            header("Location: perfil.php?erro=SALVAR");
        }
    } else if ($acao == "ALTERAR") {
        $editadoEm = date('Y-m-d H:i:s');

        $sql = "UPDATE estagio_empresas SET empresa= '$empresa', email='$email', senha = '$senha', cnpj = '$cnpj', telefone = '$telefone',";
        $sql .= " cidade = '$cidade', curso = '$curso'";
        $sql .= " editado_em = '$editadoEm' WHERE id=$id";

        $retornoSQL = mysqli_query($conexao, $sql);

        if ($retornoSQL == TRUE) {
            header("Location: perfil.php");
        } else {
            header("Location: perfil.php?erro=ALTERAR");
        }
    }

    ?>
</body>

</html>