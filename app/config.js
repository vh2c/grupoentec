$(document).ready(function () {

    console.log('Config.js');

    // var BASE = "https://entecservicos.com.br";
    var BASE = "https://entec-grupoentec.zafwfk.easypanel.host";

    

    $('body').on('click', '.A_defineIdioma', function () {

        var idioma = $(this).attr('data-lang');

        $.post(BASE + '/home/idioma/api', { idioma: idioma }, function (info) {

            if (info) {

                window.location.href = BASE;

            }else{

                console.log(info);

            }

        });

        return false;

    });



    $('#popup').modal();

    $('.carousel').carousel()

    

});