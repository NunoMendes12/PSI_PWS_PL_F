<?php

class IvaController extends BaseAuthController
{
    public function index()
    {
        $ivas = Iva::all();
        $this->makeView('iva','index',['ivas'=>$ivas]);
    }


    public function create()
    {
        // $this->loginFilterByRole('administrador');

        $this->makeView('iva','create');
    }

     public function store()
    {
        if($_POST['percentagem'] != " " )
        {
            //create new resource (activerecord/model) instance with data from POST
            //your form name fields must match the ones of the table fields
            $iva = new Iva($_POST);

            if($iva->is_valid()){
                $iva->save();
                $this->redirectToRoute('iva', 'index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->renderView('iva/create', ['iva' => $iva]);
            }
        }
        else
        {
            $this->renderView('iva/create');
        }

    }

}