<?php
class Environment{
    /**
     * Carrega variáveis de ambiente 
     * **/
    public static function load($diretorio){
         $file = file($diretorio.'.env');
        foreach($file as $file){
            putenv(trim($file));
        }
    }
}

Environment::load(__DIR__.'/../');

define("TITULO",getenv('TITULO'));
define("DESCRICAO",getenv('DESCRICAO'));
define("AUTOR",getenv('AUTOR'));
define("BASE",getenv('BASE'));
define("HOST",getenv('HOST'));
define("PORT",getenv('PORT'));
define("USER",getenv('USER'));
define("PASS",getenv('PASS'));
define("DBSA",getenv('DBSA'));
define("MAILHOST",getenv('MAILHOST'));
define("MAILUSER",getenv('MAILUSER'));
define("MAILPASS",getenv('MAILPASS'));
define("MAILPORT",getenv('MAILPORT'));
define("VERSION",getenv('VERSION'));
define('GOOGLE_MAPS_API_KEY', 'AIzaSyAC4M_SavMIrBaSKQb9aMU6oNGmHN0z4yM');
