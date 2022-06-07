<?php
require_once './models/Fatura.php';


//Igual ao Book

	class FaturaController extends BaseAuthController
	{

		public function index()
        {
            $faturas = Fatura::all();
            $this->makeView('fatura','index',['faturas'=>$faturas]);

		}

		public function create($idcliente)
        {
            if($idcliente==null){
                $this->makeView('fatura', 'create');

            }else

            $fatura = new Fatura($_POST);

        


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