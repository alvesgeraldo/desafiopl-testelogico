<?php

    // print_r($_POST);
    $resultadoChecklist = 'sim';

    foreach($_POST as $item){

        if($item !== 'sim'){
            $resultadoChecklist = 'nao';
        }

    }

    header('location:flight-checklist.php?res='.$resultadoChecklist);

?>