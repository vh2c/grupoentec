<?php
    $sis 	= new Sistema;
    $nt     = new Blog;

    $acao       = $sis->getParametros()[1];
    $parametro  = $sis->getParametros()[2];

    switch ($acao) {
        case 'ler':
            $n = $nt->retorna($parametro);
            require_once('view/noticias/ler.php');
            break;
        default:
            $lista = $nt->lista();
            require_once('view/noticias/noticias.php');
            break;
    }


?>