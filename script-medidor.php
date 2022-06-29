<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $nomes = [];
    $idades = [];
    $alturas = [];
    $pesos = [];
    $validacao = 'ok';

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

    /*

    echo '<pre>';
    var_dump($nomes);
    echo '</pre>';

    echo '<pre>';
    var_dump($idades);
    echo '</pre>';

    echo '<pre>';
    var_dump($alturas);
    echo '</pre>';

    echo '<pre>';
    var_dump($pesos);
    echo '</pre>';

    */

    if (count($nomes) != 6 || count($idades) != 6 || count($alturas) != 6 || count($pesos) != 6)  {
        $validacao = 'erro';
        header('location: medidor-tripulacao.php?res='.$validacao);
    }
    
    
    
    /*
    $nome = $_POST['nome'];
    $anoNasc = $_POST['anoNasc'];
    $anoAdmissao = $_POST['anoAdmissao'];
    $resultadoVerificacao;
    
    if($nome == '' || $anoNasc == '' || $anoAdmissao == ''){
        header('location: requisitos.php?erro=vazio');
    }

    $anoAtual = intval(date('Y'));
    $idade = $anoAtual - $anoNasc;
    $tempoTrabalho = $anoAtual - $anoAdmissao;

    if ($idade >= 25 || $tempoTrabalho >= 5 || $idade >= 21 && $tempoTrabalho >= 2) {
        $resultadoVerificacao = 'sucesso';
    } else {
        $resultadoVerificacao = 'erro';
    }

    header('location: requisitos.php?res='.$resultadoVerificacao.'&idade='.$idade.'&trabalho='.$tempoTrabalho);
    */
    

?>