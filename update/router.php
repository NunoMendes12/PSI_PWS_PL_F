<?php
require_once './startup/boot.php';
require_once './controllers/SiteController.php';
require_once './controllers/LoginController.php';
require_once './controllers/PlanoController.php';
require_once './controllers/FaturaController.php';
require_once './controllers/ProdutoController.php';
require_once './controllers/LinhaFaturaController.php';

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

    switch ($c)
    {
        case "login":
            $controller = new LoginController();
            switch ($a)
            {
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
            switch ($a)
            {
                case "index":
                    $controller->index();
                    break;
                case "create":
                    $controller->create($_GET['id']);
                case "selectCliente"
            }
            break;


        case "linhaFatura":
            $controller = new LinhaFaturaController();
            switch ($a)
            {
                case "index":
                    $controller->index();
                    break;
                case "create":
                    $controller->create($_GET['id']);
                    break;
                case "store":
                    $controller->store($_GET['id']);
                    break;
                case
            }
            break;

        case "produto":
            $controller = new ProdutoController();
            switch ($a)
            {
                case "index":
                    $controller->index();
                    break;
                case "create":
                    $controller->create();
                    break;
                case "store":
                    $controller->store();
            }
            break;
            
/*
        case "book":
            $controller = new BookController();
            switch ($a)
            {
                case "index":
                    $controller->index();
                    break;
                case "show":
                    $controller ->show($_GET['id']);
                    break;
                case"create":
                    $controller->create();
                    break;
                case"store":
                    $controller->store();
                    break;
                case"edit":
                    $controller->edit($_GET['id']);
                    break;
                case"update":
                    $controller->update($_GET['id']);
                    break;
                case"delete":
                    $controller->delete($_GET['id']);
                    break;
            }
            break;
*/

        case "site":
            $controller = new SiteController();
            $controller->index();
            break;

        default:
            $controller = new SiteController();
            $controller->index();
    }

}