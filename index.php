<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 10/12/19
 * Time: 4:25 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once  'vendor/autoload.php';

echo \CardDetector\Detector::detect(23232313131313)->get_name();