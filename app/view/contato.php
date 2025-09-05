    <div class="section-empty no-paddings">

        <div class="content">
            <div id="map" class="google-map" 
                data-coords="-3.1022388,-59.9468029"
                data-zoom="17"
                data-marker="images/marker-map.png">
            </div>
            <!-- <div id="map" class="google-map" 
                data-address="Av Autaz Mirim, 1383, Manaus, Brasil"
                data-zoom="17"
                data-marker="/images/marker-map.png">
            </div> -->
        </div>

    </div>

    <div class="section-empty">

        <div class="container content">

            <div class="row proporzional-row">

                <div class="col-md-6 col-sm-12">

                    <h2>Fale conosco</h2>

                    <p>

                        Estamos prontos para te atender.

                    </p>

                    <hr class="space l" />

                    <form action="" class="form-box" method="post">

                        <div class="row">

                            <div class="col-md-4">

                                <p>Seu nome</p>

                                <input id="name" name="nome" placeholder="" type="text" class="form-control form-value" required>

                            </div>

                            <div class="col-md-4">

                                <p>Email</p>

                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>

                            </div>

                            <div class="col-md-4">

                                <p>Telefone</p>

                                <input id="phone" name="telefone" placeholder="" type="number" class="form-control form-value">

                            </div>

                        </div>

                        <hr class="space xs" />

                        <p>Sua mensagem</p>

                        <textarea id="messagge" name="mensagem" placeholder="" class="form-control form-value" required></textarea>

                        <hr class="space s" />

                        <button class="btn-sm btn">Enviar</button>

                        <hr class="space m" />

                        <?= $msg??null ?>

                    </form>

                </div>

                <div class="col-md-6 col-sm-12 boxed-inverse">

                    <ul class="list-texts list-texts-justified">

                        <li><b>Endereço:</b> <span>Av. Autaz Mirim, 1383 - Distrito Industrial I<br> Manaus - AM CEP: 69075-155</span></li>

                        <li><b>Telefones:</b> <span>(92) 3647-2000</span></li>

                        <li><b>Emails:</b> <span>contato@grupoentec.com.br</span></li>

                    </ul>

                    <hr class="space m" />

                    <div class="btn-group social-group btn-group-icons">

                        <a target="_blank" href="https://www.facebook.com/entecservicos" title="Facebook">

                            <i class="fa fa-facebook text-s circle"></i>

                        </a>

                        <a target="_blank" href="https://www.youtube.com/@Grupoentec-gd1hp" title="Youtube">

                            <i class="fa fa-youtube text-s circle"></i>

                        </a>

                        <a target="_blank" href="https://www.instagram.com/entecservicos" title="Instagram">

                            <i class="fa fa-instagram text-s circle"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    