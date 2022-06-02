<?php

//Igual ao Book

	class FaturaController //extends BaseAuthController
	{

		public function index()
        {

			$this->makeView('fatura', 'index');

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