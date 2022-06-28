<?php

    $resultadoChecklist = isset( $_GET['res'] ) ? $_GET['res'] : 'vazio';


    /*
    $mensagem;

    if($resultadoChecklist){
        $mensagem = "Checklist realizado com sucesso";
    } else {
        $mensagem = "Falha no Checklist";
    }
    */
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
                <a class="navbar-brand" href="index.html">
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
                      <a class="nav-link" href="#">Requisitos</a>
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
        <h1 class="h2 mt-5">1- Flight checklist</h1>

        <div class="container">
            <form action="script-checklist.php" method="post"> 
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
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
        
        <?php if($resultadoChecklist == 'sim') { ?>
            <p class="text-success text-center"> Checklist realizado com sucesso </p>
        <?php } else if ($resultadoChecklist == 'nao') { ?>
            <p class="text-danger text-center"> Falha no Checklist </p>
        <?php } ?>

    </main>

</body>
</html>