<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 5/1/2019
 * Time: 1:45 PM
 */

// pet.php

class Pet
{
    private $_name;
    private $_color;


    function eat()
    {
        echo "<p>My pet is eating.</p>";
        //echo "<p>".$this->_name ."is eating</p>";
    }

    function talk()
    {
        echo "<p>My pet is talking!</p>";
    }

    function sleep()
    {
        echo "<p>My pet is sleeping!</p>";
    }
}