<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:46 AM
 */


function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';
    //echo $file;
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');
