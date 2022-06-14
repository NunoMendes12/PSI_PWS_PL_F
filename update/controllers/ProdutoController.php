<?php

require_once './controllers/BaseAuthController.php';
require_once './models/Auth.php';

class ProdutoController extends BaseAuthController
{
    public function index()
    {
        $produtos = Produto::all();
        $this->makeView('produto','index',['produtos'=>$produtos]);
    }

    public function show($id)
    {
        $produtos = Produto::find([$id]);
        if(is_null($produtos)) {
            //Todo redict to standart error page
        } else{

            $this->makeView('produto','show');
        }

    }
    public function create()
    {
        //mostrar a vista create
        $this->makeView('produto','create');

    }
    public function store()
    {
        //create new resource (activerecord/model) instance with data from POST
        //your form name fields must match the ones of the table fields
        $produtos = new Produto($_POST);
        if($produtos->is_valid()){
            $produtos->save();
            //redirecionar para o index
            $this->redirectToRoute('produto','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $ivas = Iva::All();
            $this->makeView('produto','create',['produtos'=>$produtos,'ivas'=> $ivas]);
        }
    }

}