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

use factoryAbstractWithSimpleFactory\Factory;

$factory = new Factory();
$factory->db = 'Oracle';
try{
    $oracleUser = $factory->createUser();
    $oracleAricle = $factory->createArticle();
    $oracleUser->insert();
    echo '<br/>';
    $oracleAricle->insert();
}catch (Exception $e){
    echo $e->getMessage();
}



