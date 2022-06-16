<?php

class BaseController
{
    public function makeView($controllerPrefix,$viewName,array $params=[])
    {

        extract($params);

        $auth = new Auth();

        if($auth -> isLoggedIn())
        {
            $username = $auth ->getUsername();
            $userRole = $auth ->getRole(); // 3 if para cada role criada

                if($_SESSION['role'] == 'administrador')
                {
                    require_once './views/layoutBo/admin/index.php';
                    require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
                    require_once './views/layoutBo/footer.php';
                }
                if ($_SESSION['role'] == 'cliente')
                {
                    require_once './views/layoutBo/headercliente.php';
                    require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
                    require_once './views/layoutBo/footer.php';
                }
                if ($_SESSION['role'] == 'funcionario')
                {
                    require_once './views/layoutBo/headerfuncionario.php';
                    require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
                    require_once './views/layoutBo/footer.php';
                }
        }
        else{
            require_once './views/layoutFo/header.php';
            require_once './views/' . $controllerPrefix . '/' . $viewName . '.php';
            require_once './views/layoutFo/footer.php';
        }

    }

    public function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }



}