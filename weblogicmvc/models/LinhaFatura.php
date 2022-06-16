<?php

class LinhaFatura extends ActiveRecord\Model
{
    static $belongs_to = array(
        array('fatura'),
        array('produto')
    );
    static $validates_presence_of = array(
        array('quantidade'),
        array('valorunitario'),
        array('valoriva'),
        array('produto_id'),
        array('fatura_id'),
    );
}