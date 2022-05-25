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
            $userRole = $auth ->getRole(); // 3 if para cada role criada

        }

        if($_SESSION['role'] == 'administrador')
        {
            require_once './views/layout/headerAdministrador.php';
        }
        elseif ($_SESSION['role'] == 'cliente')
        {
            require_once './views/layout/headerCliente.php';
        }
        elseif ($_SESSION['role'] == 'funcionario')
        {
            require_once './views/layout/headerFuncionario.php';
        }
        require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
        require_once './views/layout/footer.php';
    }

    protected function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }



}