<?php
  
    $nome = $_POST['nome'];
    $anoNasc = $_POST['anoNasc'];
    $anoAdmissao = $_POST['anoAdmissao'];
    $resultadoVerificacao;
    
    // Verifica se algum dos campos veio vazio
    if($nome == '' || $anoNasc == '' || $anoAdmissao == ''){
        header('location: ../requisitos.php?erro=vazio');
    }

    // Recupera na variável o ano atual do sistema do usuário
    $anoAtual = intval(date('Y'));

    // Efetua o calculo da idade e tempo de trabalho
    $idade = $anoAtual - $anoNasc;
    $tempoTrabalho = $anoAtual - $anoAdmissao;

    // Verifica as condições para o requisito
    if ($idade >= 25 || $tempoTrabalho >= 5 || $idade >= 21 && $tempoTrabalho >= 2) {
        $resultadoVerificacao = 'sucesso';
    } else {
        $resultadoVerificacao = 'erro';
    }

    header('location: ../requisitos.php?res='.$resultadoVerificacao.'&idade='.$idade.'&trabalho='.$tempoTrabalho);

    

?>