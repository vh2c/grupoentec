<?php
    $sis 	= new Sistema;
    $login  = new AutUser;

    $post   = $sis->getPost();

    if ($post) {
        $lg = $login->login($post);
        switch ($lg) {
            case 1:
                $msg = '
                <div class="success-box">
                    <div class="alert alert-success">Logado com sucesso, Você será redirecionado em instantes.</div>
                    <meta http-equiv="refresh" content="3;url='.BASE.'/painel">
                </div>';
                break;
            case 2:
                $msg = '
                <div class="error-box">
                    <div class="alert alert-warning">Verifique os campos e tente novamente.</div>
                </div>';
                break;
            default:
                $msg = '
                <div class="error-box">
                    <div class="alert alert-warning">ERRO, tente novamente ou entre em contato com o suporte.</div>
                </div>';
                break;
        }
    }
    
    require_once('view/login.php');
?>