<?php


class User extends \ActiveRecord\Model 
{
	 	static $validates_presence_of = array(
        array('username'),
        array('password'),
        array('email'),
        array('telefone'),
        array('morada'),
        array('codigopostal'),
        array('localidade'),
        array('role')
    );

	 	   static $validates_numericality_of = array(
        	array('telefone', 'only_integer' => true)
    );
}




?>