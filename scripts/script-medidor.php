<?php

    $nomes = [];
    $idades = [];
    $alturas = [];
    $pesos = [];
    $validacao = 'ok';
    $somaPeso = 0;
    $maisAlto = [];
    $mediaIdade = 0;
    $pessoaMenorPeso = 0;


    for ($i=0; $i < 6; $i++) { 
        
        if( $_POST['nome'.($i+1)] != ''){
            array_push($nomes, $_POST['nome'.($i+1)]);
        } else {
            continue;
        }

    }

    for ($i=0; $i < 6; $i++) { 
        
        if( $_POST['idade'.($i+1)] != ''){
            array_push($idades, intval($_POST['idade'.($i+1)]));
        } else {
            continue;
        }

    }

    for ($i=0; $i < 6; $i++) { 
        
        if( $_POST['altura'.($i+1)] != ''){
            array_push($alturas, floatval($_POST['altura'.($i+1)]));
        } else {
            continue;
        }

    }

    for ($i=0; $i < 6; $i++) { 
        
        if( $_POST['peso'.($i+1)] != ''){
            array_push($pesos, floatval($_POST['peso'.($i+1)]));
        } else {
            continue;
        }

    }

    if (count($nomes) != 6 || count($idades) != 6 || count($alturas) != 6 || count($pesos) != 6)  {
        $validacao = 'erro';
        header('location: ../medidor-tripulacao.php?res='.$validacao);
    }

    function pesoTotal($pesos){

        $somaPeso = 0;

        for ($i=0; $i < 6; $i++) { 
        
            $somaPeso += $pesos[$i];
    
        }

        return $somaPeso;

    }

    function primeiroSegundoAlto($alturas){

        $primeiraPessoaAlta = 0;
        $segundaPessoaAlta = 0;
        $maisAlto = [];

        for ($i=0; $i < 6; $i++) { 
        
            if ( $alturas[$i] > $primeiraPessoaAlta ) {
                
                $segundaPessoaAlta = $primeiraPessoaAlta;
                $maisAlto[1] = $maisAlto[0];
    
                $primeiraPessoaAlta = $alturas[$i];
                $maisAlto[0] = $i;
    
            }
    
            if ( $alturas[$i] < $primeiraPessoaAlta && $alturas[$i] > $segundaPessoaAlta) {
                
                $segundaPessoaAlta = $alturas[$i];
                $maisAlto[1] = $i;
    
            }
        }

        return $maisAlto;

    }

    function mediaIdade($idades){

        $mediaIdade = 0;
        $somaIdade = 0;

        for ($i=0; $i < 6; $i++) { 
        
            $somaIdade += $idades[$i];
    
        }
    
        return $mediaIdade = $somaIdade/6;

    }

    function pessoaMenorPeso($pesos){

        $menorPeso = 0;
        $pessoaMenorPeso = 0;

        for ($i=0; $i < 6; $i++) { 
        
            if($menorPeso == 0){
                
                $menorPeso = $pesos[$i];
                $pessoaMenorPeso = $i;
    
            }
    
            if ( $menorPeso > $pesos[$i] ) {
                
                $menorPeso = $pesos[$i];
                $pessoaMenorPeso = $i;
    
            }
    
        }

        return $pessoaMenorPeso;

    }

    $somaPeso = pesoTotal($pesos);
    $maisAlto = primeiroSegundoAlto($alturas);
    $mediaIdade = mediaIdade($idades);
    $pessoaMenorPeso = pessoaMenorPeso($pesos);
    
?>
