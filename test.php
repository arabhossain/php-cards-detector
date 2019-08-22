<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:50 AM
 */



include_once 'autoloader.php';


try{
    var_dump(\src\Detector::detect("5555555555554444")->get_logo());
}catch (Exception $e){
    var_dump($e);
}


