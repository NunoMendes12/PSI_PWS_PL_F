<?php

class AdminController extends BaseAuthController
{
    public function index()
    {

        $this->makeView('admin', 'index');

    }


}