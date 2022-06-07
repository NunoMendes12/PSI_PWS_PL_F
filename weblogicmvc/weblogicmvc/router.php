<?php
require_once './startup/boot.php';
require_once './controllers/SiteController.php';
require_once './controllers/AuthController.php';
require_once './controllers/FaturaController.php';




if(!isset($_GET['c'], $_GET['a']))
{
    // omissão, enviar para site
    $controller = new SiteController();
    $controller->index();
}
else
{
    // existem parametros definidos
    $c = $_GET['c'];
    $a = $_GET['a'];

    switch ($c) {
        case "login":
            $controller = new AuthController();
            switch ($a) {
                case "index":
                    $controller->index();
                    break;

                case "login":
                    $controller->login();
                    break;

                case "logout":
                    $controller->logout();
            }
            break;

        case "fatura":
            $controller = new FaturaController();
            switch ($a) {
                case "index":
                    $controller->index();
                    break;

            }
            break;

            case"funcionario":
             $controller = new AuthController();
                $controller->index();


        case"admin":
            $controller = new AuthController();
            $controller->index();
            break;



        case "site":
            $controller = new SiteController();
            $controller->index();
            break;



        default:
            $controller = new SiteController();
            $controller->index();
    }

}