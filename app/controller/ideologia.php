<?php
    $sis 	= new Sistema;

    /* $acao       = $sis->getParametros()[1];
    $parametro  = $sis->getParametros()[2];

    switch ($acao) {
        default:
            require_once('view/vendas.php');
            break;
    } */

    if ($idioma['idioma'] == "en") {
        require_once('view/Ingles/ideologia.php');
    }else {
        require_once('view/ideologia.php');
    }

?>