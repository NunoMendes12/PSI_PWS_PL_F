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

<<<<<<< Updated upstream
     public function store()
    {
        if($_POST['percentagem'] != " " )
        {
            //create new resource (activerecord/model) instance with data from POST
            //your form name fields must match the ones of the table fields
=======

    public function store()
    {
        if($_POST['percentagem'] != " ")
        {
>>>>>>> Stashed changes
            $iva = new Iva($_POST);

            if($iva->is_valid()){
                $iva->save();
<<<<<<< Updated upstream
                $this->redirectToRoute('iva', 'index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->renderView('iva/create', ['iva' => $iva]);
=======
                $this->redirectToRoute('iva','index');
            }else{
                $this->makeView('iva','create',['iva'=>$iva]);
>>>>>>> Stashed changes
            }
        }
        else
        {
<<<<<<< Updated upstream
            $this->renderView('iva/create');
=======
            $this->makeView('iva','create');
        }
    }


    public function edit($id)
    {
        $iva = Iva::find([$id]);
        if(is_null($iva)){

        }else{
           $this->makeView('iva','edit',['iva'=>$iva]);
>>>>>>> Stashed changes
        }

    }

<<<<<<< Updated upstream
=======
    public function update($id)
    {
        if(($_POST['percentagem'] != " "))
        {
            $iva = Iva::find([$id]);
            $iva->update_attributes($_POST);
            if($iva->is_valid())
            {
                $iva->save();
                $this->redirectToRoute('iva','index');
            }else{
                $this->makeView('iva','edit',['iva'=>$iva]);
            }
        }
        else{
            $iva = Iva::find([$id]);
            $this->makeView('iva','edit',['iva'=>$iva]);
        }

    }
>>>>>>> Stashed changes
}