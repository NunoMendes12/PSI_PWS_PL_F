<?php
require_once ('./vendor/autoload.php');

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/bdfatura',
        )
    );
});

define('APP_NAME','Fatura +');//nome da aplicação variavel de ambiente
define('INVALID_ACCESS_ROUTE','c=login&a=index');


?>


