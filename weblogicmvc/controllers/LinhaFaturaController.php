<?php
require_once './models/LinhaFatura.php';
require_once './models/Produto.php';
require_once './models/Fatura.php';

class LinhaFaturaController extends BaseAuthController
{
    function index()
    {

        $faturas = Fatura::all();
        $this->makeView('linhaFatura', 'index', ['faturas' => $faturas]);
    }

    function create($idFatura, $idProduto)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $linhasFatura = LinhaFatura::find_all_by_fatura_id($idFatura);
        if(is_null($idProduto)){
            $this->makeView('linhaFatura','create',['fatura'=>$fatura,'empresa'=>$empresa,'linhasFatura'=>$linhasFatura]);
        }else{
            $produto = Produto::find([$idProduto]);
            $this->makeView('linhaFatura','create',['fatura'=>$fatura,'empresa'=>$empresa,'linhasFatura'=>$linhasFatura,'produto'=>$produto]);
        }
    }

    function selectProduct($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);
        $produtos = Produto::all();
        $this->makeView('linhaFatura', 'selectProduct', ['fatura' => $fatura, 'produtos' => $produtos]);
    }


    function store($idFatura, $idProduto)
    {
        $_POST['produto_id'] = $idProduto;
        $_POST['fatura_id'] = $idFatura;


        if ($_POST['quantidade'] != " ") {
            $produto = Produto::find([$idProduto]);

            $fatura = Fatura::find([$idFatura]);
            $linhaFatura = new LinhaFatura($_POST);


            if ($linhaFatura->is_valid() && $_POST['quantidade'] <$produto->stock) {
                $linhaFatura->save();
                $stockFinal = $produto->stock - $_POST['quantidade'];
                $arrayProduto = array('stock' => $stockFinal);
                $produto->update_attributes($arrayProduto);
                $produto->save();


                $valorTotal = $fatura->valor_total + ($_POST['valorunitario'] * $_POST['quantidade']);


                $ivaTotal = $fatura->iva_total + ($_POST['valoriva'] * $_POST['quantidade']);
                $arrayFatura = array('valor_total' => $valorTotal, 'ivatotal' => $ivaTotal);
                $fatura->update_attributes($arrayFatura);
                $fatura->save();

                $this->redirectToRoute('linhaFatura', 'create',['idFatura'=>$idFatura]);
            } else {

                $this->redirectToRoute('linhaFatura', 'create',['idFatura' => $idFatura, 'idProduto'=> $idProduto ]);
            }
        } else {
            $this->redirectToRoute('linhaFatura', 'create' ,['idFatura' => $idFatura, 'idProduto'=> $idProduto ]);
        }
    }


    function edit($idLinhaFatura)
    {
        //retirar o valor do produto e do iva da linha fatura a editar dos valores da fatura e depois adicionar no update
        $linhaF = LinhaFatura::find([$idLinhaFatura]);
        $fatura = Fatura::find([$linhaF->fatura_id]);
        $empresa = Empresa::find([1]);
        $linhasFatura = LinhaFatura::find_all_by_fatura_id($linhaF->fatura_id);
        $this->renderView('linhaFatura/edit', ['linhaF' => $linhaF, 'empresa' => $empresa, 'linhasFatura' => $linhasFatura, 'fatura' => $fatura]);
    }

    function update($idLinhaFatura)
    {
        $linhaFatura = LinhaFatura::find([$idLinhaFatura]);
        $fatura = Fatura::find([$linhaFatura->fatura_id]);
        $empresa = Empresa::find([1]);
        $linhasFatura = LinhaFatura::find_all_by_fatura_id($linhaFatura->fatura_id);
        if (($_POST['quantidade'] != " ")) {

            $linhaFatura->update_attributes($_POST);
            if ($linhaFatura->is_valid() && $_POST['quantidade'] < $linhaFatura->produto->stock) {
                $linhaFatura->save();

                $this->redirectToRoute('linhaFatura', 'create&idFatura=' . $linhaFatura->fatura_id);
            } else {
                $this->makeView('linhaFatura','edit', ['linhaFatura' => $linhaFatura, 'empresa' => $empresa, 'linhasFatura' => $linhasFatura, 'fatura' => $fatura]);
            }
        }
    }
}