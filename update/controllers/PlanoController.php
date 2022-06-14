<?php
require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';
require_once './models/Plano.php';
use Carbon\Carbon;

class PlanoController extends BaseAuthController
{
    public function index()
    {
         $this->loginFilter();
         $this->makeView('plano', 'index');
    }

    public function calcular()
    {
        $this->loginFilter();

        if(isset($_POST['valor'], $_POST['numPrest']))
        {
            $plano = new Plano();
            $hoje = Carbon::now();
            $data=$hoje->isoFormat('D/MM/YYYY');
            //var_dump($data);
            $matriz = $plano->calculaPlano($_POST['valor'], $_POST['numPrest']);
            $this->makeView('plano', 'tabela',['matriz'=>$matriz,'data'=>$data]);
        }
        else
        {
            $this->redirectToRoute('plano', 'index');
        }

    }

}
