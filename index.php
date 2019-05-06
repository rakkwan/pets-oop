<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

    // Turn on error reporting
    ini_set('display_error', 1);
    error_reporting(E_ALL);

    //require autoload file
    require_once ('vendor/autoload.php');
    //require_once('classes/pet.php');

    // create an instance of the base class
    $f3 = Base::instance();

    // Turn on Fat-free error reporting
    $f3->set('DEBUG', 3);

    // define a default route
    $f3->route('GET /', function($f3)
    {
        // Instantiate the Pet class
        $pet1 = new Pet();
        $f3->set('pet1', $pet1);

        $view = new Template();
        echo $view->render('views/my-pets.html');
    });

    // Run Fat-Free
    $f3->run();
