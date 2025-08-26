<?php
    $sis 	= new Sistema;

    $post       = $sis->getPost();
    
    if ($post) {
        $acao       = $sis->getParametros()[1];
        switch ($acao) {
            case 'idioma':
                $dados = [
                    "idioma"    => $post['idioma']
                ];
                $set = $sis->defineIdioma($dados);
                echo $set;
                die;
                break;
            
            default:
                # code...
                break;
        }
    }

    if ($idioma['idioma'] == "en") {
        require_once('view/Ingles/home.php');
    }else {
        require_once('view/home.php');
    }
?>