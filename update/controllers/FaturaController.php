<?php
require_once './models/Fatura.php';
require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';

class FaturaController extends BaseAuthController
{
    public function index()
    {
        //$fatura = Fatura::all();
        $this->makeView('fatura','index');//,['fatura'=>$faturas]);

    }

    public function create($idcliente)
    {
        if ($idcliente == null)
        {
            $this->makeView('fatura', 'create',['empresa' => $empresa]);

        } else

            $fatura = new Fatura($_POST);
   }

   public function store($idcliente){

        $faturas = new Fatura($_POST);
        $dateToday = Carbon::now();

        $user = User::find([$idcliente]);
    }

}