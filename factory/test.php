<?php
/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/14
 * Time: 4:51 PM
 */
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\','/',$class) . '.php';
}

/**************************************  test  **************************************/

use factory\AddFactory;
use factory\SubFactory;
use factory\MulFactory;
use factory\DivFactory;

$factory = new DivFactory();
$operation = $factory->produce();
$result = $operation->setNumberA(1)->setNumberB(2)->getResult();
echo $result;


