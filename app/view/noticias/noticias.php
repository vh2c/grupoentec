<div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="<?= BASE ?>/images/Servicos/Servicos.jpg">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>Entec noticias</h1>
            <p> </p>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="grid-list">
            <div class="grid-box row">
                <?php if ($lista): ?>
                    <?php
                        foreach ($lista as $l) {
                            echo '
                            <div class="grid-item col-md-6">
                                <div class="advs-box advs-box-top-icon-img boxed text-left" data-href="'.BASE.'/noticias/ler/'.$l['id'].'">
                                    <a class="img-box" href="'.BASE.'/noticias/ler/'.$l['id'].'">
                                        <span><img src="'.BASE.'/painel/uploads/banner/'.$l['banner'].'" alt=""></span>
                                    </a>
                                    <div class="advs-box-content">
                                        <h3>'.$l['titulo'].'</h3>
                                        <p>
                                        '.$sis->resume($l['materia'],120).'...
                                        </p>
                                    </div>
                                </div> 
                            </div>';
                        }
                    ?>
                <?php else: ?>
                    <div class="error-box">
                        <div class="alert alert-warning">Infelizmente ainda não possuimos noticias por aqui.</div>
                    </div>
                <?php endif ?>
                <!-- INSERT OTHERS GALLERY ITEMS HERE -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>