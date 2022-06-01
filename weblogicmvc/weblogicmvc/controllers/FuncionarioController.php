<?php

class FuncionarioController extends BaseAuthController
{
    public function index()
    {

        $this->makeView('funcionario', 'index');
    }
}


