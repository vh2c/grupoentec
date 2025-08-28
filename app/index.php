<?php

    ob_start();

    session_start();



    require_once('config/iniSis.php');

    require_once('config/autoload.php');



    $sis = new Sistema;



    $autUser = session_id();

    $idioma = $sis->retornaIdioma();

    $sis->debug(TRUE);

    $sis->log(TRUE);



    $sis->api($idioma);

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    

    <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-T9SNPLNT');</script>

<!-- End Google Tag Manager -->

    

    <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WGZ5SMTG');</script>

<!-- End Google Tag Manager -->

    

    

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ENTEC Servicos - Locacoes de equipamentos e containeres - Embalagens especiais</title>

    <meta name="description" content="A ENTEC e uma empresa especializada na locacao de equipamentos, empilhadeiras, stackers, conteineres, venda de equipamentos, Embalagens especiais, remocao e transporte na regiao de manaus.">

    <meta name= "publisher" content="ENTEC Empilhadeiras, Entec conteineres, manaus, empilhatec, sercom, aluguel, rental, manaus, amazonas, entec, somov, empilhadeiras manaus, distrito industrial,toyota empilhadeiras, hyster, yale, clark, empilhadeiras manaus, operador de empilhadeiras,locação, contêiner Manaus, conteineres, contaminar, containers, modulo habitacional, contêiner obra, contêiner construcao civil, contêiner deposito, embalagens especiais, embalagem maquinas, reach stacker, stacker, aluguel stacker, stacker manaus, super g, alicon Manaus, alicon">

    <meta name ="keywords" content="ENTEC Empilhadeiras, Entec conteineres, manaus, empilhatec, sercom, aluguel, rental, manaus, amazonas, entec, somov, empilhadeiras manaus, distrito industrial,toyota empilhadeiras, hyster, yale, clark, empilhadeiras manaus, operador de empilhadeiras,locação, contêiner Manaus, conteineres, contaminar, containers, modulo habitacional, contêiner obra, contêiner construcao civil, contêiner deposito, embalagens especiais, embalagem maquinas, reach stacker, stacker, aluguel stacker, stacker manaus, super g, alicon Manaus, alicon">

    <meta name="googlebot" content="index,follow">

    <meta name="robots" content="index,follow">

    <meta http-equiv="content-language" content="pt">

    <meta name="revisit-after" content="7 days">

    <meta name="expires" content="0">

    <meta name="rating" content="general">

    <meta name="audience" content="all">

    <link rel="stylesheet" href="/assets/scripts/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/style.css">

    <link rel="stylesheet" href="/assets/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="/assets/css/content-box.css">

    <link rel="stylesheet" href="/assets/scripts/flexslider/flexslider.css">

    <link rel="stylesheet" href="/assets/scripts/magnific-popup.css">

    <link rel="stylesheet" href="/assets/css/animations.css">

    <link rel="stylesheet" href="/assets/css/components.css">

    <link rel="stylesheet" href="/assets/scripts/php/contact-form.css">

    <link rel="stylesheet" href="/skin.css">

</head>

<body>

    

    <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9SNPLNT"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

    

    <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGZ5SMTG"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

    <div id="preloader"></div>

    <header class="fixed-top" data-menu-anima="fade-bottom">

        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">

            <div class="navbar-mini scroll-hide">

                <div class="container">

                    <div class="nav navbar-nav navbar-left">

                        <span><i class="im-phone-2"></i>+55 (92)3647-2000</span>

                        

                    </div>

                    <div class="nav navbar-nav navbar-right">

                        <ul class="nav navbar-nav lan-menu">

                            <li class="dropdown">

                                <?php
                                    if ($idioma['idioma'] == "en") {

                                        echo '

                                        <a href="#" class="dropdown-toggle A_defineIdioma" data-toggle="dropdown" data-lang="en"><img src="/images/en.png" alt="flag" />EN <span class="caret"></span></a>

                                        <ul class="dropdown-menu">

                                            <li data-lang="br" class="A_defineIdioma"><a><img src="/images/br.png" alt="flag" />PT</a></li>

                                        </ul>';

                                    }else {

                                        echo '

                                        <a href="#" class="dropdown-toggle A_defineIdioma" data-toggle="dropdown" data-lang="br"><img src="/images/br.png" alt="flag" />BR <span class="caret"></span></a>

                                        <ul class="dropdown-menu">

                                            <li data-lang="en" class="A_defineIdioma"><a><img src="/images/en.png" alt="flag" />EN</a></li>

                                        </ul>';

                                    }

                                ?>

                                

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="navbar navbar-main">

                <div class="container">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle">

                            <i class="fa fa-bars"></i>

                        </button>

                        <a class="navbar-brand" href="">

                            <img class="logo-default" src="/images/logo1.png" alt="Entec" />

                            <img class="logo-retina" src="/images/logo1.png" alt="Entec" />

                        </a>

                    </div>

                    <div class="collapse navbar-collapse">

                        <?php if ($idioma['idioma'] == "en"): ?>

                            <ul class="nav navbar-nav">

                                <li class="dropdown">

                                    <a href="/">Home <span class="caret"></span></a>   

                                </li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Services <span class="caret"></span></a>

                                    <ul class="dropdown-menu multi-level">

                                        <li class="entecsub"><a href="/servicos/1">Rigging<br>Transportation</a></li>

                                        <li class="entecsub"><a href="/servicos/2">Equipment<br>Rental</a></li>

                                        <li class="entecsub"><a href="/servicos/3">Containers<br>Rental</a></li>

                                        <li class="entecsub"><a href="/servicos/4">Special<br>Packaging</a></li>



                                    </ul>

                                </li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Sales<span class="caret"></span></a>

                                    <ul class="dropdown-menu multi-level">

                                        <li class="entecsub"><a href="/vendas">Sales<br>Equipment</a></li>

                                    </ul>

                                </li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Entec <span class="caret"></span></a>

                                    <ul class="dropdown-menu multi-level">

                                        <li class="entecsub"><a href="/historia">Our<br>History</a></li>

                                        <li class="entecsub"><a href="/ideologia">Ideology<br></a></li>

                                    </ul>

                                </li>

                                <li class="dropdown">

                                    <a href="/noticias">News<span class="caret"></span></a>   

                                </li>

                                <li class="dropdown">

                                    <a href="/contato">Contact <span class="caret"></span></a>

                                </li>

                            </ul>

                        <?php else: ?>

                            <ul class="nav navbar-nav">

                                <li class="dropdown">

                                    <a href="/">Home <span class="caret"></span></a>   

                                </li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Serviços <span class="caret"></span></a>

                                    <ul class="dropdown-menu multi-level">

                                        <li class="entecsub"><a data-conteudo="/view/servicos/transporte.php" href="#">Remoção<br>Transporte</a></li>

                                        <li class="entecsub"><a data-conteudo="/view/servicos/equipamentos.php" href="#">Locação<br>Equipamentos</a></li>

                                        <li class="entecsub"><a data-conteudo="/view/servicos/conteineres.php" href="#">Locação<br>Contêineres</a></li>

                                        <li class="entecsub"><a data-conteudo="/view/servicos/embalagens.php" href="#">Embalagens<br>Especiais</a></li>


                                    </ul>

                                </li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Vendas<span class="caret"></span></a>

                                    <ul class="dropdown-menu multi-level">

                                        <li class="entecsub"><a href="/vendas">Vendas<br>Equipamentos</a></li>

                                    </ul>

                                </li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Entec <span class="caret"></span></a>

                                    <ul class="dropdown-menu multi-level">

                                        <li class="entecsub"><a href="/historia">Nossa<br>História</a></li>

                                        <li class="entecsub"><a href="/ideologia">Ideologia</a></li>

                                    </ul>

                                </li>

                                <li class="dropdown">

                                    <a href="/noticias">Notícias<span class="caret"></span></a>   

                                </li>

                                <li class="dropdown">

                                    <a href="/contato">Contato <span class="caret"></span></a>

                                </li>

                                <li class="dropdown">

                                    <a href="/blog">Blog <span class="caret"></span></a>

                                </li>

                            </ul>

                        <?php endif ?>

                        <div class="nav navbar-nav navbar-right">

                            <div class="custom-area">

                                <a href="/login" class="btn btn-sm">Login</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>
    <div id="conteudo-detalhe">
        Carregando detalhes...
    </div>
    <?php

       // $sis->getHome($autUser,$idioma);

    ?>

    

    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/f764fa65-91f7-491a-83f0-911e09da3da2-loader.js" ></script>

    

<!--    <a href="https://api.whatsapp.com/send?phone=5592999973843&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20uma%20cota%C3%A7%C3%A3o" target="_blank" class="pop-whats">

        <i class="fab fa-whatsapp fa-2x"></i>

    </a> -->

    

    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>

    <footer class="footer-base">

        <div class="container content">

            <div class="row white">

                <?php if ($idioma['idioma'] == "en") : ?>

                    <div class="col-md-4">

                        <img class="logo" src="/images/logo-badge.png" alt="logo" />

                        <hr class="space s" />

                        <p class="text-s">Follow our social networks.</p>

                        <hr class="space s" />

                        <div class="btn-group social-group btn-group-icons">

                            <a target="_blank" href="https://www.facebook.com/entecservicos" title="Facebook">

                                <i class="fa fa-facebook text-s circle white"></i>

                            </a>

                            <a target="_blank" href="https://www.youtube.com/@Grupoentec-gd1hp" title="Youtube">

                                <i class="fa fa-youtube text-s circle white"></i>

                            </a>

                            <a target="_blank" href="https://www.instagram.com/entecservicos" title="Instagram">

                                <i class="fa fa-instagram text-s circle white"></i>

                            </a>

                        </div>

                    </div>

                    <div class="col-md-4">

                    </div>

                    <div class="col-md-4">

                        <h3 class="text-black text-uppercase">MENU</h3>

                        <hr class="space space-30" />

                        <div class="footer-menu text-s">

                            <a href="/servicos/1">SERVICES</a>

                            <a href="/vendas">SALES</a>

                            <a href="/sobre">ENTEC</a>

                            <a href="/noticias">NEWS</a>

                            <a href="/contato">CONTACT</a>

                        </div>

                    </div>

                <?php else: ?>

                    <div class="col-md-4">

                        <img class="logo" src="/images/logo-badge.png" alt="logo" />

                        <hr class="space s" />

                        <p class="text-s">

                            Siga nossas redes sociais.

                        </p>

                        <hr class="space s" />

                        <div class="btn-group social-group btn-group-icons">

                            <a target="_blank" href="https://www.facebook.com/entecservicos" title="Facebook">

                                <i class="fa fa-facebook text-s circle white"></i>

                            </a>

                            <a target="_blank" href="https://www.youtube.com/@Grupoentec-gd1hp" title="Youtube">

                                <i class="fa fa-youtube text-s circle white"></i>

                            </a>

                            <a target="_blank" href="https://www.instagram.com/entecservicos" title="Instagram">

                                <i class="fa fa-instagram text-s circle white"></i>

                            </a>

                        </div>

                    </div>

                    <div class="col-md-4">

                    </div>

                    <div class="col-md-4">

                        <h3 class="text-black text-uppercase">MENU</h3>

                        <hr class="space space-30" />

                        <div class="footer-menu text-s">

                            <a href="/servicos/1">SERVIÇOS</a>

                            <a href="/vendas">VENDAS</a>

                            <a href="/sobre">ENTEC</a>

                            <a href="/noticias">NOTÍCIAS</a>

                            <a href="/contato">CONTATO</a>

                        </div>

                    </div>

                <?php endif ?>

            </div>

            <hr class="space hidden-sm" />

            <div class="row copy-row">

                <div class="col-md-12 copy-text">

                    © 2023 Entec Serviços by <a href="http://www.tak.com.br/">TAK DIGITAL</a>

                </div>

            </div>

        </div>

        

        <script src="/assets/scripts/jquery.min.js"></script>

        <script src="/assets/scripts/parallax.min.js"></script>

        <script src="/assets/scripts/script.js"></script>

        <link rel="stylesheet" href="/assets/scripts/iconsmind/line-icons.min.css">

        <script src="/assets/scripts/bootstrap/js/bootstrap.min.js"></script>

        <script src="/assets/scripts/imagesloaded.min.js"></script>

        <script src="/assets/scripts/jquery.magnific-popup.min.js"></script>

        <script src="/assets/scripts/flexslider/jquery.flexslider-min.js"></script>

        <script src="/assets/scripts/jquery.tab-accordion.js"></script>

        <script src="/assets/scripts/isotope.min.js"></script>

        <script src="/assets/scripts/bootstrap/js/bootstrap.popover.min.js"></script>

        <script src='/assets/scripts/php/contact-form.js'></script>

        <script src='/assets/scripts/jquery.progress-counter.js'></script>

        <script src="/assets/scripts/smooth.scroll.min.js"></script>

        <script src="/assets/scripts/smooth.scroll.min.js"></script>

        <script src="/assets/scripts/bootstrap/js/modal.js"></script>

        <script src="/assets/scripts/bootstrap/js/carousel.js"></script>

        <script src="/config.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC4M_SavMIrBaSKQb9aMU6oNGmHN0z4yM&callback=initMap" async defer></script>

        <!-- <script src="/assets/scripts/google.maps.min.js"></script> -->

        <script>

            function initMap() {

                // Localização do marcador (substitua com suas coordenadas)

                var minhaLocalizacao = { lat: -3.1022388, lng: -59.9468029 };



                // Opções do mapa

                var options = {

                    zoom: 17,

                    center: minhaLocalizacao

                };



                // Criar mapa

                var map = new google.maps.Map(document.getElementById('map'), options);



                // Criar marcador

                var marker = new google.maps.Marker({

                    position: minhaLocalizacao,

                    map: map,

                    title: 'Nossa localização'

                });

            }

        </script>

    </footer>

</body>

</html>



<?php

    ob_end_flush();