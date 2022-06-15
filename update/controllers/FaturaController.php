<?php
require_once './models/Fatura.php';
require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';

class FaturaController extends BaseAuthController
{
    public function index()
    {
        $fatura = Fatura::all();
        $this->makeView('fatura','index',['fatura'=>$faturas]);

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

        $fatura->data = $dateToday;
        $fatura->valortotal = "0";
        $fatura->ivatotal = "0";
        $fatura->estado = "em lançamento";
        $fatura->cliente_id = $idcliente;

        if (fatura->is_valid()) {
            $fatura->save();
            $this->redirectToRoute('linhaFatura', 'create', ['id' => $fatura ->id]);
        } else {
            $this -> makeView('fatura', 'create', ['faturas' => $fatura]);
        }

        
   }

}