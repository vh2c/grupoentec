<?php
    $sis 	= new Sistema;
    $c      = new Contato;

    $acao       = $sis->getParametros()[1];
    $post       = $sis->getPost();

    switch ($acao) {
        default:
            if ($post) {
                $mail = $c->contato($post);
                switch ($mail) {
                    case '1':
                        $msg = 
                        '<div class="success-box">
                            <div class="alert alert-success">E-Mail de contato enviado com sucesso, retornaremos o mais rapido possivel.</div>
                        </div>';
                        break;
                    
                    default:
                        $msg = 
                        '<div class="error-box">
                            <div class="alert alert-warning">Infelizmente houve um erro ao enviar o email, tente novamente mais tarde.</div>
                        </div>';
                        break;
                }
            }
            if ($idioma['idioma'] == "en") {
                require_once('view/Ingles/contato.php');
            }else {
                require_once('view/contato.php');
            }
            break;
    }

?>