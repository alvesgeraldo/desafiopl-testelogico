<?php

    include './script-medidor.php';

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
                      <a class="nav-link" href="flight-checklist.php">Flight checklist</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="requisitos.php">Requisitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Medidor de Tripulação</a>
                    </li>
                  </ul>
                </div>
              </nav> 
        </div>
    </header>

    <main class="container">
        
        <h1 class="h2 my-5">Resultado da Medição da Tripulação</h1>

        <div class="container mb-5">

            <dl class="row">
                <dt class="col-sm-3">Peso total dos tripulantes:</dt>
                <dd class="col-sm-9 text-success"><strong><?= $somaPeso ?> kg</strong></dd>

                <dt class="col-sm-3">Os dois tripulantes mais altos:</dt>
                <dd class="col-sm-9">
                    <p class="text-success"><strong><?= $nomes[$maisAlto[0]] ?></strong></p>
                    <p class="text-success"><strong><?= $nomes[$maisAlto[1]] ?></strong></p>
                </dd>

                <dt class="col-sm-3">Idade média dos tripulantes:</dt>
                <dd class="col-sm-9 text-success"><strong><?= $mediaIdade ?> anos</strong></dd>

                <dt class="col-sm-3 text-truncate">Tripulante de menor peso:</dt>
                <dd class="col-sm-9 text-success"><strong><?= $nomes[$pessoaMenorPeso] ?></strong></dd>

            </dl>
        </div>

        <a href="medidor-tripulacao.php" class="btn btn-primary">Nova medição</a>

        <a href="index.php" class="btn btn-success">Voltar ao início</a>

    </main>

</body>
</html>