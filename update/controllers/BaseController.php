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
            $userrole=$auth->getRole();

            require_once './views/layoutBo/header.php';
            require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
            require_once './views/layoutBo/footer.php';


        }else {
            require_once './views/layoutFo/header.php';
            require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
            require_once './views/layoutFo/footer.php';
        }
    }

    protected function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }



}