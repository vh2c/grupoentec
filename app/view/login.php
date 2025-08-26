    <div class="section-empty">

        <div class="container content">

            <div class="row proporzional-row">

                <div class="col-md-3 col-sm-12"></div>

                <div class="col-md-6 col-sm-12 boxed-inverse">

                    <form action="" class="form-box" method="post">

                            <div style="display: flex;justify-content: center;margin-bottom: 5%;">

                                <img class="logo-default" src="/images/logo.png" alt="logo" />

                            </div>

                            <div class="row">

                                <p>Email</p>

                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>

                            </div>

                            <div class="row">

                                <p>Senha</p>

                                <input id="Senha" name="senha" placeholder="" type="password" class="form-control form-value" required>

                            </div>

                            <button class="btn-sm btn" type="submit">Entrar</button>

                            <hr class="space xs">

                            <?= $msg??null ?>

                    </form>

                </div>

                <div class="col-md-3 col-sm-12"></div>

            </div>

        </div>

    </div>