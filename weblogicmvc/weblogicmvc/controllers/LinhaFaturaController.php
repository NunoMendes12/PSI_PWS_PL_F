<?php


// igual ao chaphters
/*
class LinhaFaturaController extends BaseAuthController
{

    public function index()
    {

    }



    public function create($idFatura, $idProduto)//,[$idProduto])
    {
        if($idProduto==null){
            $this-> makeView('fatura', 'index');
        }
        else
            $linhaFatura= new LinhaFatura($_POST);

        $idProduto = $idProduto;

    public function store($id)
    {
        //gravar linha de fautra*
        //redirect -> linhaFatura/Create(idFatura)
    }

    public function edit($idLinhaFatura)
    {

    }



    public function selectProduct($idFatura)
    {

    }

}