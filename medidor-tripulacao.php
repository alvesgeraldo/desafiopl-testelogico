<?php

    $res = isset( $_GET['res'] ) ? $_GET['res'] : '';


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
                        <a class="nav-link" href="#">Medidor de Tripulação</a>
                    </li>
                  </ul>
                </div>
              </nav> 
        </div>
    </header>

    <main class="container">
        <h1 class="h2 mt-5">3- Medidor de Tripulação</h1>

        <?php if($res == 'erro') { ?>
            <p class="text-danger">Preencha todos os campos, para poder enviar</p>
        <?php } ?>

        <div class="container mb-3">
            <form action="resultado-medidor.php" method="post"> 
                <p>Preencha os dados completos dos tripulantes</p>
                
                <?php for ($i=0; $i < 6; $i++) { ?> 
                 
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nome">Digite seu nome do <?= $i+1 ?>° tripulante</label>
                            <input type="text" class="form-control" id="nome" name="nome<?= $i+1 ?>" placeholder="José Silva">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" class="form-control" id="idade" name="idade<?= $i+1 ?>" placeholder="32">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="altura">Altura</label>
                            <input type="text" class="form-control" id="altura" name="altura<?= $i+1 ?>" placeholder="1.75">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" id="peso" name="peso<?= $i+1 ?>" placeholder="75.8">
                        </div>
                    </div>
                </div>

                <?php } ?>

                <button type="submit" class="btn btn-primary">Executar medição</button>

            </form>
        </div>

    </main>

</body>
</html>