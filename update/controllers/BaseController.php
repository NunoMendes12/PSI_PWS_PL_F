<?php

class BaseController
{
    protected function makeView($controllerPrefix,$viewName,array $params=[])
    {

        extract($params);

        $auth = new Auth();

        if($auth -> isLoggedIn())
        {
            $username = $auth ->getUsername();
        }
        require_once './views/layout/header.php';
        require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
        require_once './views/layout/footer.php';
    }

    protected function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }



}