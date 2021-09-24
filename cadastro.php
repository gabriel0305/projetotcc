<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
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
                
                
            </ul>
        </header>
    </div>


    <div class="container my-4 p-3">

        <div class="row">

            <div class="col-md-6 offset-md-3 " style="border:solid 1px #000000; border-radius: 20px; padding: 10px; background-color: #ffffff; ">
                <h2 class="text-center">Cadastro</h2>

                <form method="POST" action="clientesController.php" class="cadastro">
                    <div class="form-input">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" required name="nome" type="text" class="form-control">
                    </div>



                    <div class="form-input">
                        <label for="exampleInputEmail1">Email </label>
                        <input id="email" required name="email" type="email" class="form-control">
                    </div>

                    <div class="form-input">
                        <label for="senha">Senha</label>
                        <input id="senha" required name="senha" type="password" class="form-control">
                    </div>

                    <div class="form-input">
                        <label for="cpf">CPF</label>
                        <input id="cpf" required name="cpf" type="text" class="form-control cpf">
                    </div><br>

                    <div class="form-input">
                        <div class="form-input">
                            <label for="genero">Genero </label>
                            <select name="genero" id="genero">
                                <option value="">--SELECIONE--</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                                <option value="O">Outros</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-input">
                        <label for="data">Data de Nascimento</label>
                        <input id="data" required name="data" type="tel" class="form-control date1">
                    </div>
                    <div class="form-input">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" required name="telefone" type="text" class="form-control phone">
                    </div><br>

                    <div class="flex-row">
                        <div class="form-input">
                            <label for="curso">Curso </label>
                            <select name="curso" id="curso">
                                <option value="">--SELECIONE--</option>
                                <option value="I">Informática</option>
                                <option value="R">RH</option>
                                <option value="C">Comércio</option>
                                <option value="A">ADM</option>
                                <option value="S">Serviços Jurídicos</option>
                                <option value="L">Logística</option>
                            </select>
                        </div>
                    </div><br>

                    <br>
                    <h2 class="text-center">Endereço</h2><br>



                    <div>
                        <label for="cidade">Cidade</label>
                        <input id="cidade" required name="cidade" type="text" class="form-control">
                    </div>

                    <div>
                        <label for="bairro">Bairro</label>
                        <input id="bairro" required name="bairro" type="text" class="form-control">
                    </div>

                    <div>
                        <label for="rua">Rua</label>
                        <input id="rua" required name="rua" type="text" class="form-control">
                    </div>

                    <div>
                        <label for="numero">Número</label>
                        <input id="numero" required name="numero" type="text" class="form-control">
                    </div>

                    <div>
                        <label for="cep">CEP</label>
                        <input id="cep" required name="cep" type="text" class="form-control cep">
                    </div>
                    <br>
                    <a href="#" class="botao text-align ">VOLTAR</a>
                    <input type="submit" name="acao" value="SALVAR" class="botao text-align float-right">
                </form>



            </div>


        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script src="js/validate-pt-br.js"></script>

    <script>
        $(document).ready(function(){
             $('.date1').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00.000-000');
            $('.phone').mask('(00) 0000-0000');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});

            $('form').validate();
  
        });
    </script>

</body>

</html>