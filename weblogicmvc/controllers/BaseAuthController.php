<?php
require_once './controllers/BaseController.php';
require_once './models/Auth.php';

class BaseAuthController extends BaseController {

    protected function loginFilter(){
        $auth=new Auth();
        if(!$auth->isLoggedin()){
            header('location: ./router.php?'.INVALID_ACCESS_ROUTE);
        }
    }

    protected function loginFilterbyRole($roles=[])
    {
        $auth=new Auth();
        $role = $auth->getRole();
        $validRole = in_array($role);

        if(!$validRole)
            header('location: ./router.php?'.INVALID_ACCESS_ROUTE);
    }
}