<?php
require_once './controllers/BaseController.php';

class BackOfficeController extends  BaseAuthController
{
    function index()
    {
        $this->makeView('backoffice', 'index');
    }

}