<?php
    $sis 	= new Sistema;

    $acao       = $sis->getParametros()[1];
    $parametro  = $sis->getParametros()[2];

    switch ($acao) {
        default:
            require_once('view/404.php');
            break;
    }

?>