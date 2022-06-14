<?php

class Genre extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('genre')
    );


}