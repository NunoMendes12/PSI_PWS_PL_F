<?php

class ProductController
{

    public function create()
    {


    }


    public function  __construct()
    {
        //Filtro de Acesso para todos os metodos de construtor

        $this->loginFilterbyRole(['funcionario','administrador']);
    }

}