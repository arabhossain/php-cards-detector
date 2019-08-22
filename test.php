<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:50 AM
 */



include_once 'autoload.php';

$type = \src\Detector::detect("5555555555554444");

echo $type->get_name();
echo $type->get_logo();
echo $type->get_logo_base64();



