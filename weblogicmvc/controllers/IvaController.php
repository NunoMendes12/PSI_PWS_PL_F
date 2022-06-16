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
        if($_POST['percentagem'] != " ")
        {
            $iva = new Iva($_POST);

            if($iva->is_valid()){
                $iva->save();
                $this->redirectToRoute('iva','index');
            }else{
                $this->makeView('iva','create',['iva'=>$iva]);
            }
        }
        else
        {
            $this->makeView('iva','create');
        }
    }


    public function edit($id)
    {
        $iva = Iva::find([$id]);
        if(is_null($iva)){

        }else{
           $this->makeView('iva','edit',['iva'=>$iva]);
        }

    }

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
}