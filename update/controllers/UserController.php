<?php
require_once './models/Fatura.php';
require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';

class UserController extends BaseAuthController
{
    public function index()
    {
        $user = User::all();
        $this->makeView('fatura','index');//,['fatura'=>$faturas]);

    }


}