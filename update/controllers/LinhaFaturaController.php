<?php
require_once './models/LinhaFatura.php';
require_once './models/Fatura.php';
//require_once './models/Empresa.php';
require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';

class LinhaFaturaController extends BaseAuthController
{
    public function index()
    {
        $faturas = Fatura::all();
        $this->makeView('fatura','index',['fatura'=>$faturas]);

    }

    public function create($idFatura, $idProduto)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $cliente = User::find([$fatura->cliente_id]);
        if (!is_null($idProduto)) {
            $produto = Produto::find([$idProduto]);

        }

        $this->makeView('linhaFatura','create','fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente, 'idProduto' => $idProduto);  
    }

   public function store($idFatura){

        $linhaFatura = new LinhaFatura($_POST);
        $idFatura = Fatura::find([$idFatura]);
        if ($linhaFatura->is_valid()) {
            $linhaFatura->save();
            $this->redirectToRoute('linhaFatura', 'create', ['id' => $idFatura]);
        } else{
            $this ->makeView('linhaFatura', 'create', ['id' => $idFatura]);
        }      
   }

   public function edit($idLinhaFatura) 
   {
        $linhaFatura = LinhaFatura::find([$idLinhaFatura]);
        if (is_null($linhaFatura)) {
        //TODO redirect to standard error page
         } 
         else 
         {
            $this-> makeView('linhaFatura', 'edit',//['book'=>$book]);
         }
   }

   public function update($id)
   {
        $users = User::find([$id]);
        $users-> update_attributes($_POST);
        if ($users->is_valid()) {
            $users->save();
            $this->redirectToRoute('user','index');

        } else {
            $roles = Role::all();
            $this->makeView('user', 'edit'. ['users' => $users, 'roles' ])
        }

   }

   public function show($id)
   {    

        $user::find([$id]);
        if (is_null($user)) {
            
        }else
        {
            $this->makeView('user','show', ['user' => $user]);
        }

   }

}