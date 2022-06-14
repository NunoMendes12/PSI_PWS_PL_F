<?php
require_once './controllers/BaseController.php';
require_once './models/Auth.php';


class BaseAuthController extends BaseController
{

    public function loginFilter()
    {
        $auth=new Auth();
        if(!$auth->isLoggedin()){
            header('location: ./router.php?'.INVALID_ACCESS_ROUTE);
        }
    }

    public function loginFilterbyRole($role)
    {
        $auth=new Auth();
        $role = $auth->getRole();
        $validRole = in_array($role, $roles);

        if(!$validRole)//!$auth->isLoggedin()){ // colocar a Role aqUi  e remover (!$validRole)
            header('location: ./router.php?'.INVALID_ACCESS_ROUTE);
        }

}