<?php

class EmpresaController extends BaseAuthController
{
    public function index()
    {
        $this->loginFilterbyRole(['administrador','funcionario']);
        $empresas = Empresa::all();
        $this->makeView('empresa','index',['empresa'=> $empresas]);
    }



    public function edit($id)
    {
        $empresas = Empresa::find([$id]);
        if(is_null($empresas)) {
                  //Redecionar para a pagina error
        }else
            {
                $this->makeView('empresa','edit',['empresas'=> $empresas]);
            }
    }

    public  function update($id)
    {
        $empresas = Empresa::find([$id]);
        $empresas->update_atributes($_POST);
        if($empresas->is_valid())
        {
            $empresas->save();
            $this->redirectToRoute('empresa','index');
        }
        else
        {
            $this->makeView('empresa','edit',['empresas'=>$empresas]);
        }
    }

}