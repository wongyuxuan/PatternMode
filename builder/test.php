<?php

// 注册加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\','/',$class) . '.php';
}

/***************************************** test *****************************************/

use builder\ProductBuilder;

$builder = new ProductBuilder();
$builder->getMp3([
    'name' => '某族MP3',
    'hardware' => [
        'cpu'     => 1,
        'ram'     => 1,
        'storage' => 128,
    ],
    'software' => ['os' => 'mp3 os']
]);
echo '<hr/>';
$builder->getPhone([
    'name' => '某米8s',
    'hardware' => [
        'scree'  => '5.8',
        'camera'  => '2600w',
        'cpu'     => 4,
        'ram'     => 8,
        'storage' => 128,
    ],
    'software' => ['os' => 'android 6.0']
]);

