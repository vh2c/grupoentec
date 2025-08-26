<?php
    $sis 	= new Sistema;

    $acao       = $sis->getParametros()[1];
    $parametro  = $sis->getParametros()[2];

    switch ($acao) {
        case 1:
            if ($idioma['idioma'] == "en") {
                require_once('view/Ingles/servicos/transporte.php');
            }else {
                require_once('view/servicos/transporte.php');
            }
            break;
        case 2:
            if ($idioma['idioma'] == "en") {
                require_once('view/Ingles/servicos/equipamentos.php');
            }else {
                require_once('view/servicos/equipamentos.php');
            }
            break;
        case 3:
            if ($idioma['idioma'] == "en") {
                require_once('view/Ingles/servicos/conteineres.php');
            }else {
                require_once('view/servicos/conteineres.php');
            }
            break;
        case 4:
            if ($idioma['idioma'] == "en") {
                require_once('view/Ingles/servicos/embalagens.php');
            }else {
                require_once('view/servicos/embalagens.php');
            }
            break;
        default:
            require_once('view/404.php');
            break;
    }

?>