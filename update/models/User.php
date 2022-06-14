<?php  


 class User extends \ActiveRecord\Model
 {
 	 static $has_many = array(
        array('fatura')
    );

       static $validates_presence_of = array(
        array('username', 'message' => 'Campo de preenchimento obrigatório'),
        array('password', 'message' => 'Campo de preenchimento obrigatório'),
        array('email', 'message' => 'Campo de preenchimento obrigatório'),
        array('telefone', 'message' => 'Campo de preenchimento obrigatório'),
        array('morada', 'message' => 'Campo de preenchimento obrigatório'),
        array('codigopostal', 'message' => 'Campo de preenchimento obrigatório'),
        array('localidade', 'message' => 'Campo de preenchimento obrigatório'),
        array('role', 'message' => 'Campo de preenchimento obrigatório',)
    );
 	 
       static $validates_numericality_of = array(
        array('nif', 'only_integer' => true),
        array('telefone', 'only_integer' => true)
    );

       static $validates_inclusion_of = array(
        array('role', 'in' => array('cliente', 'funcionario', 'administrador')),
    );
 }

?>