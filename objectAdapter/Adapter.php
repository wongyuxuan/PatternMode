<?php
/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/17
 * Time: 4:13 PM
 */

namespace objectAdapter;

/**
 * 类适配器
 *
 * Class Adapter
 * @package ClassAdapter
 */
class Adapter implements Targer
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
        $adaptee->money = "$5";
    }

    public function pay()
    {
        $this->adaptee->pay();
    }

    public function notify()
    {
        echo "通知";
    }
}