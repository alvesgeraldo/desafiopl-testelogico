<?php

    // Variável armazena resultado do checklist
    $resultadoChecklist = 'sim';

    // Variável usada na verificação do preenchimento dos campos
    $mensagem = 'ok';

    // Laço de repetição verifica se algum campo veio vazio e armazena o erro na variável
    foreach($_POST as $item){

        if($item == ''){
            $mensagem = 'vazio';
        } 

    }

    // Caso variável armazene o erro campo vazio, retorna o erro para página principal
    if ($mensagem == 'vazio') {
        header('location: ../flight-checklist.php?erro=vazio');
     } else if ($mensagem == 'ok' ) {
        
        // Laço de repetição verifica se há alguma resposta diferente de sim e aramazena o resultado na variável resultadoChecklist
        foreach($_POST as $item){

            if($item !== 'sim'){
                $resultadoChecklist = 'nao';
            }
    
        }
    
        header('location: ../flight-checklist.php?res='.$resultadoChecklist);

    }
    
    

?>