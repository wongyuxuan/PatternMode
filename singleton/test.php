<?php

// 注册加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\','/',$class) . '.php';
}

/***************************************** test *****************************************/

use singleton\Singleton;

// 获取单例
$instance = Singleton::getInstance();
$instance->test();

// clone对象
$instanceClone = clone $instance;
