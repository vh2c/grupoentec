<?php
    
    class Contato extends Sistema 
    {

        /**
         * Método responsavel pelo envio de email para contato]
         * @param array $post array com dados informador no contato
         * @return int
         */
        
        public function contato($post) {
            $assunto    =	'[Entec] Contato recebido via site!';
            $mensagem = '
            <!DOCTYPE html>
            <html lang="pt-BR">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Email</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="author" content="Enzo Vilas Boas"/>
            </head>
            <body style="font-family: Montserrat, sans-serif; font-size: 16px; margin: 0; padding: 0; width: 100%; height: 100%; background-color: #f0f0f0;">
                <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td align="center" valign="top" bgcolor="#4c4c4c" style="min-height: 30vh;">
                            <img src="https://entecservicos.com.br/images/logo.png" alt="Logo" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" bgcolor="#24129a" style="min-height: 60vh;">
                            <h1 style="font-size: 4vh;color: #fffcff;">Contato</h1>
                            <table style="margin: 1vh;color: #fffcff;">
                                <tboody>
                                    <tr>
                                        <td>Nome : '.$post['nome'].'</td>
                                        <td></td>
                                        <td></td>
                                        <td>Email : '.$post['email'].'</td>
                                    </tr>
                                    <tr>
                                        <td>Telefone : '.$post['telefone'].'</td>
                                    </tr>
                                    <tr>
                                        <td>Mensagem :</td>
                                    </tr>
                                </tboody>
                            </table>

                            <p style="text-align: center; line-height: 1.8; font-size: 2vh;color: #fffcff;">'.$post['mensagem'].'</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" bgcolor="#010000" style="min-height: 5vh; color: #fffcff;">
                            <p style="text-align: center;">&copy; Copyright 2023. Todos direitos reservado. Powered by <a href="https://www.tak.com.br" target="_blank">Tak Digital</a></p>
                        </td>
                    </tr>
                </table>
            </body>
            </html>';
            $destino 			=	"comercial@grupoentec.com.br";
            //$destino 			=	"enzovilasboas75@gmail.com";
            $nomeDestino		=	"Entec Servicos";
            $mail = Sistema::sendMail($assunto,$mensagem,$destino,$nomeDestino);
            if ($mail) {
                return 1;
            }else {
                return 0;
            }
        }

    }