<?php

    print_r($_POST);
    
    $nome = $_POST['nome'];
    $anoNasc = $_POST['anoNasc'];
    $anoAdmissao = $_POST['anoAdmissao'];
    $resultadoVerificacao;
    
    if($nome == '' || $anoNasc == '' || $anoAdmissao == ''){
        header('location: ../requisitos.php?erro=vazio');
    }

    $anoAtual = intval(date('Y'));
    $idade = $anoAtual - $anoNasc;
    $tempoTrabalho = $anoAtual - $anoAdmissao;

    if ($idade >= 25 || $tempoTrabalho >= 5 || $idade >= 21 && $tempoTrabalho >= 2) {
        $resultadoVerificacao = 'sucesso';
    } else {
        $resultadoVerificacao = 'erro';
    }

    header('location: ../requisitos.php?res='.$resultadoVerificacao.'&idade='.$idade.'&trabalho='.$tempoTrabalho);

    

?>