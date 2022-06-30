<?php

    // print_r($_POST);
    $resultadoChecklist = 'sim';
    $mensagem = 'ok';

    foreach($_POST as $item){

        if($item == ''){
            $mensagem = 'vazio';
        } 

    }

    if ($mensagem == 'vazio') {
        header('location: ../flight-checklist.php?erro=vazio');
    } else if ($mensagem == 'ok' ) {
        
        foreach($_POST as $item){

            if($item !== 'sim'){
                $resultadoChecklist = 'nao';
            }
    
        }
    
        header('location: ../flight-checklist.php?res='.$resultadoChecklist);

    }
    
    

?>