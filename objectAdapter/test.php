<?php

// 注册加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\','/',$class) . '.php';
}

/***************************************** test *****************************************/

use objectAdapter\Adapter;

$adaptee = new \objectAdapter\Adaptee();
$adaptee->pay();
echo "<hr/>";
$adapter = new Adapter($adaptee);
$adapter->pay();



