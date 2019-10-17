<?php
/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/17
 * Time: 4:13 PM
 */

namespace ClassAdapter;

/**
 * 类适配器
 *
 * Class Adapter
 * @package ClassAdapter
 */
class Adapter extends Adaptee implements Targer
{
    public $money = "$5";

    public function notify()
    {
        echo "通知";
    }
}