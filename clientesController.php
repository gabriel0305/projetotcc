<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientesController</title>
</head>

<body>

    <?php
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
    $dataNascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
    $dataNascimento = date("Y-m-d",strtotime(str_replace("/","-",$dataNascimento)));
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
    $rua = isset($_POST['rua']) ? $_POST['rua'] : null;
    $numero = isset($_POST['numero']) ? $_POST['numero'] : null;
    $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
    $cep = isset($_POST['cep']) ? $_POST['cep'] : null;
    $acao = isset($_POST['acao']) ? $_POST['acao'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $id = isset($_POST['id_']) ? $_POST['id_'] : '';
    $curso = isset($_POST['curso']) ? $_POST['curso'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';


    if ($acao == "SALVAR") {
        $criadoEm = date('Y-m-d H:i:s');
        $editadoEm = date('Y-m-d H:i:s');

        $sql = "INSERT INTO aluno (nome, cpf, data_nascimento, email, telefone, rua, numero, bairro, cidade, cep, genero, senha,  criado_em, editado_em)";
        $sql .= " values ('$nome','$cpf','$dataNascimento','$email','$telefone','$rua','$numero', '$bairro', '$cidade','$cep','$genero','$senha','$criadoEm','$editadoEm')";

        $retornoSQL = mysqli_query($conexao, $sql);

        if ($retornoSQL == TRUE) {
            header("Location: index.php");
        } else {
            header("Location: index.php?erro=SALVAR");
        }
    } else if ($acao == "ALTERAR") {
        $editadoEm = date('Y-m-d H:i:s');

        $sql = "UPDATE aluno SET nome = '$nome', cpf='$cpf', data_nascimento = '$dataNascimento', email = '$email', telefone = '$telefone',";
        $sql .= " rua = '$rua', bairro = '$bairro', cidade = '$cidade',  cep = '$cep', genero = '$genero', senha='$senha' ";
        $sql .= " editado_em = '$editadoEm' WHERE id=$id";

        $retornoSQL = mysqli_query($conexao, $sql);

        if ($retornoSQL == TRUE) {
            header("Location: index.php");
        } else {
            header("Location: index.php?erro=ALTERAR");
        }
    }

    ?>
</body>

</html>