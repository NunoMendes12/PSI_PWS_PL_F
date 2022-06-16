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
        $empresas = Empresa::find([1]);
        $this->makeView('fatura','create',['empresas'=>$empresas]);
    }

    public function selectClient()
    {

        $users = User::all();
        $this-> makeView('fatura', 'selectClient', ['users' => $users]);

        $empresas = Empresa::find([1]);
        $this->makeView('fatura','create',['empresas'=>$empresas]);
    }


    
}