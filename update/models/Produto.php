<?php

class Produto extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('id'),
        array('referencia'),
        array('descricao'),
        array('preco'),
        array('stock'),
        array('taxaiva'),
        array('iva_id')
    );
}