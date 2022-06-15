<?php  

require_once './models/User.php';

class UserController extends BaseAuthController

	public function index()
    {
        $this->loginFilterByRole('administrador');
        $users = User::all(array('conditions' => array('role = ? OR role = ? OR role = ?', 'administrador', 'funcionario', 'cliente')));
        $this->makeView('user','index', ['users'=>$users]);
    }

    public function create()
    {
        $this->loginFilterByRole('administrador');
        $this->makeView('user','create');
    }
?>