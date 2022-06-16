<?php
require_once './controllers/BaseController.php';
class InfoController extends BaseController
{

    function index()
    {
        $this->makeView('info', 'index');
    }


}