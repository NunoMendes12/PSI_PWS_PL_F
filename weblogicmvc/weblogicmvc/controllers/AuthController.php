<?php
require_once './controllers/BaseController.php';
require_once './models/Auth.php';

class AuthController extends BaseController
{
    public function index()
    {
        $auth = new Auth();
        if(!$auth->isLoggedIn())
        {
            $this->makeView('login', 'index');
        }
        else
        {
            $this->redirectToRoute('site', 'index');
        }
    }

    public function login()
    {
        if(isset($_POST['name'], $_POST['password']))
        {
            $auth = new Auth();
            if($auth->checkLogin($_POST['name'], $_POST['password'])) {

                if ($_SESSION['role'] == 'administrador') {
                    $this->redirectToRoute('admin','index');
                    require_once './views/admin/header.php';
                }
                if ($_SESSION['role'] == 'cliente') {
                    $this->redirectToRoute('cliente','index');
                    require_once './views/cliente/header.php';
                }
                if ($_SESSION['role'] == 'funcionario') {
                    $this->makeView('funcionario','index');
                    require_once './views/funcionario/header.php';
                }


                /*switch ($_SESSION['role']) {
                   case "administrador":
                    require_once './views/admin/index.php';
                    break;
                    case "funcionario":
                        require_once './views/funcionario/index.php';
                    break;
                    case "cliente":
                        require_once './views/cliente/index.php';
                    break;
                }
            }*/
            }
        }
        else
        {
            $this->redirectToRoute('login', 'index');
        }

    }



    public function logout()
    {
        $auth = new Auth();
        $auth->logout();
        $this->redirectToRoute('login', 'index');
    }
}