<?php

class Chapter extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('book')
    );

    static $has_many = array(
        array('chapters')
    );

}