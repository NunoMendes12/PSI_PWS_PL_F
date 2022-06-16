<?php

class EmpresaController extends  BaseAuthController
{
    public function index()
    {
        $empresas = Empresa::all();
        $this->makeView('empresa','index' ,['empresas'=> $empresas]);

    }

}