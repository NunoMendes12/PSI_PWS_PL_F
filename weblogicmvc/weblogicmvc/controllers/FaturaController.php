<?php
require_once './models/Fatura.php';
require_once './controllers/BaseAuthController.php';

//Igual ao Book

	class FaturaController extends BaseAuthController
	{

		public function index()
        {
            $faturas = Fatura::all();
            $this->makeView('fatura','index',['faturas'=>$faturas]);
            require_once './views/fatura/create.php'; //AQUIIII

		}

		public function create()
        {
            $empresa = Empresa::find();
            $this->makeView('fatura', 'create', ['empresa'=>$empresa]);
            //require_once './views/fatura/create.php';
		}

        public function store($idFatura)
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