<?php

    $erro = isset( $_GET['erro'] ) ? $_GET['erro'] : '';

    $res = $_GET['res'];
    $idade = $_GET['idade'];
    $tempoTrabalho = $_GET['trabalho'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/3ca0835c19.js" crossorigin="anonymous"></script>

    <title>Testes lógicos Spacestylex</title>
</head>
<body>
    
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">
                    Testes Lógicos
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                  <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="flight-checklist.php">Flight checklist</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="requisitos.php">Requisitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medidor-tripulacao.php">Medidor de Tripulação</a>
                    </li>
                  </ul>
                </div>
              </nav> 
        </div>
    </header>

    <main class="container">
        <h1 class="h2 mt-5">2- Verificador de requisitos</h1>

        <div class="container">
            <form action="./scripts/script-requisitos.php" method="post"> 
                <p>Preencha os dados abaixo para verificar os requisitos</p>
                <div class="form-group">
                    <label for="nome">Digite seu nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="José Silva">
                </div>

                <div class="form-group">
                    <label for="anoNasc">Digite o ano do seu nascimento</label>
                    <input type="number" class="form-control" id="anoNasc" name="anoNasc" placeholder="1990">
                </div>

                <div class="form-group">
                    <label for="anoAdmissao">Digite o ano que ingressou na empresa</label>
                    <input type="number" class="form-control" id="anoAdmissao" name="anoAdmissao" placeholder="2020">
                </div>
                
                <!-- Mensagem de erro caso seja enviado campos vazios -->
                <?php if($erro == 'vazio') { ?>
                    <p class="text-danger">Preencha todos os campos, para poder enviar</p>
                <?php } ?>

                <button type="submit" class="btn btn-primary">Verificar requisitos</button>

            </form>
        </div>
        
        <!-- Resultado da verificação dos requisitos ao usuários de acordo com parâmetro recebido do script -->
        <?php if($res == 'sucesso') { ?>
            <p class="text-center"> <strong>Sua idade é: <?= $idade ?> anos e seu tempo de trabalho na empresa é de: <?= $tempoTrabalho ?> anos </strong></p>
            <p class="text-success text-center h4"><strong>Você atende aos requisitos. Apto para viagem!</strong></p>
        <?php } else if ($res == 'erro') { ?>
            <p class="text-center"> <strong>Sua idade é: <?= $idade ?> anos e seu tempo de trabalho na empresa é de: <?= $tempoTrabalho ?> anos</strong> </p>
            <p class="text-danger text-center h4"><strong>Você não atende aos requisitos. Não está apto para viagem!</strong></p>
        <?php } ?>

    </main>

</body>
</html>