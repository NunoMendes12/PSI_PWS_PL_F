<?php

class BaseController
{
    protected function makeView($controllerPrefix,$viewName,array $params=[])
    {

        extract($params);

        $auth = new Auth();

        if ($auth->isLoggedIn()) {
            $username = $auth->getUsername();
            $userRole = $auth->getRole();

            if ($_SESSION['role'] == 'administrador') {
                require_once './views/admin/header.php';
            }
            if ($_SESSION['role'] == 'cliente') {
                require_once './views/cliente/header.php';
            }
            if ($_SESSION['role'] == 'funcionario') {
                require_once './views/funcionario/header.php';
            }


        } else {
            require_once './views/layout/front/header.php';
            require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
            require_once './views/layout/front/footer.php';
        }

    }

    protected function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }



}