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
}