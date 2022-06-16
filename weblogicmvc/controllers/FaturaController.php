<?php
require_once './models/Fatura.php';
require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';

class FaturaController extends BaseAuthController
{
    public function index()
    {
        $faturas = Fatura::all();
        $this->makeView('fatura','index',['faturas'=>$faturas]);

    }

    public function create()
    {


            $this->makeView('fatura', 'create');
            $fatura = new Fatura($_POST);

    }

    public function selectClient()
    {
        $users = User::all();
        $this->makeView('fatura','selectClient',['users' => $users]);

    }

}