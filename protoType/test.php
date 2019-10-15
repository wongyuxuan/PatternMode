<?php
/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 4:46 PM
 */

spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\','/',$class) . '.php';
}

/**************************************  test  **************************************/

use protoType\DoSport;
use protoType\Sport;

$sport = new Sport();
$sport->sportName = '篮球';
$doSport = new DoSport();
$doSport->setSport($sport);
$doSport->play();

$cloneDoSport = clone $doSport;
$cloneDoSport->play();

echo '<hr/>';

$sport->sportName = '台球';
$doSport->play();
$cloneDoSport->play();