<?php
require_once './models/Fatura.php';

//Igual ao Book

	class FaturaController extends BaseController
	{

		public function index()
        {
            $faturas = Fatura::all();
            $this->makeView('fatura', 'index',['faturas' => $faturas]);

		}

		public function create()
        {


		}
        public function store($idcliente)
        {
            //gravar Fatura( preencher todos os campos da fatura)
            //redirect -> minhaFatura / create + id Fatura
        }

        /*
        public  function selectclient//(filtro de pesquisa)
        {

        }

        */
	}


?>