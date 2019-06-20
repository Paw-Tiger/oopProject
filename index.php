<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'Autoload.php');
spl_autoload_register(['Autoload', 'loader']);
//3
//2
//1
try {
    $asus = new \application\Asus('Intel', 8000, 2000, 1, 'Asus1');

    $asus->start();
//    $asus->shutdown();
    $asus->printParameters();
}catch (Exception $exception) {
    echo $exception->getMessage() . "\n\n";
    echo $exception->getLine() . "\n\n";
    echo $exception->getFile() . "\n\n";
}

//function divideZero($a, $b)
//{
//
//    if ($b == 0) {
//        throw new Exception('Devide by zero');
//    }
//
//    return $a / $b;
//}
//
//
//try {
//    echo divideZero(4, 0);
//} catch (Exception $exception) {
//    echo $exception->getMessage() . "\n\n";
//    echo $exception->getLine() . "\n\n";
//    echo $exception->getFile() . "\n\n";
//}
