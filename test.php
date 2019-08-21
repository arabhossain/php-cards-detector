<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:50 AM
 */



include_once 'autoloader.php';


try{
    echo  \src\Detector::detect("4111111111111111");
}catch (Exception $e){
    var_dump($e);
}


