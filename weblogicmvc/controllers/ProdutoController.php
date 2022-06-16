<?php
require_once './models/Auth.php';

class ProdutoController extends BaseAuthController
{
    public function index()
    {
        $produtos = Produto::all();
        $this->makeView('produto','index',['produtos'=>$produtos]);
    }


    public function create()
    {
        //mostrar a vista create
        $ivas = Iva::all();
        $this->makeView('produto','create',['ivas'=>$ivas]);

    }
    public function store()
    {
        //create new resource (activerecord/model) instance with data from POST
        //your form name fields must match the ones of the table fields
        $ivas = Iva::all();
        if(($_POST['referencia'] != " "))
        {
            $produto = new Produto($_POST);
            if($produto->is_valid()) {
                $produto->save();
                //redirecionar para o index
                $this->redirectToRoute('produto','index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->makeView('produto','create',['produto'=>$produto,'ivas'=> $ivas]);
            }
        }
        else
        {
        $this->makeView('produto','create',['ivas'=> $ivas]);
        }
    }



    function edit($id){
        $produto = Produto::find([$id]);
        $ivas = Iva::all();
        if(is_null($produto)){

        }else{
            $this->makeView('produto','edit',['ivas'=>$ivas,'produto'=>$produto]);
        }
    }

    function update($id)
    {

        $ivas = Iva::all();
        if(($_POST['referencia'] != " " ))
        {
            //find resource (activerecord/model) instance where PK = $id
            //your form name fields must match the ones of the table fields
            $produto = Produto::find([$id]);
            $produto->update_attributes($_POST);
            if($produto->is_valid()){
                $produto->save();
                $this->redirectToRoute('produto', 'index');
            } else {
                $this->makeView('produto','edit',['ivas'=>$ivas,'produto'=>$produto]);
            }
        }
        else
        {
            $produto = Produto::find([$id]);
            $this->makeView('produto','edit',['ivas'=>$ivas,'produto'=>$produto]);
        }
    }



}