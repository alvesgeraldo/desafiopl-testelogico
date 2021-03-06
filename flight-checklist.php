<?php

    $erro = isset( $_GET['erro'] ) ? $_GET['erro'] : '';

    $resultadoChecklist = isset( $_GET['res'] ) ? $_GET['res'] : 'vazio';

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
    
    <!-- Cabeçalho menu -->
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
        <h1 class="h2 mt-5">1- Flight checklist</h1>

        <div class="container">
            <form action="./scripts/script-checklist.php" method="post"> 
                <p>A cada item verificado responda sim, para item verificado ou não, para item não verificado</p>
                <div class="form-group">
                    <label for="baterias">Baterias</label>
                    <select class="form-control" id="baterias" name="baterias">
                        <option value=""></option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>  
                    </select>
                </div>
                <div class="form-group">
                    <label for="permissoes">Permissões</label>
                    <select class="form-control" id="permissoes" name="permissoes">
                        <option value=""></option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>  
                    </select>
                </div>
                <div class="form-group">
                    <label for="combustivel">Combustível</label>
                    <select class="form-control" id="combustivel" name="combustivel">
                        <option value=""></option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>  
                    </select>
                </div>
                <div class="form-group">
                    <label for="radio">Rádio</label>
                    <select class="form-control" id="radio" name="radio">
                        <option value=""></option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>  
                    </select>
                </div>

                <!-- Resultado da validação, caso os campos sejam enviados sem preenchimento -->
                <?php if($erro == 'vazio') { ?>
                    <p class="text-danger">Preencha todos os campos, para poder enviar</p>
                <?php } ?>

                <button type="submit" class="btn btn-primary">Executar Checklist</button>
            </form>
        </div>
        
        <!-- Mensagem que será exibida ao usúario de acordo com parâmetro recebido do script -->
        <?php if($resultadoChecklist == 'sim') { ?>
            <p class="text-success text-center h4"> <strong>Checklist realizado com sucesso!</strong> </p>
        <?php } else if ($resultadoChecklist == 'nao') { ?>
            <p class="text-danger text-center h4"> <strong> Falha no Checklist! Realize novamente. </strong> </p>
        <?php } ?>

    </main>

</body>
</html>