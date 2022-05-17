<?php

if(!isset($_GET['c'], $_GET['a']))
{
    
    $controller = new SiteController();
    $controller->index();
}
else
{

    $controller = $_GET['c'];
    $action = $_GET['a'];

    switch ($controller)
    {
        case "login":
            $controller = new LoginController();
            switch ($action)
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

        case "plano":
            $controller = new PlanoController();
            switch ($action)
            {
                case "index":
                    $controller->index();
                    break;

                case "calcular":
                    $controller->calcular();
                    break;
            }
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