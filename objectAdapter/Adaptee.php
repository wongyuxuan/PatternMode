<?php
namespace objectAdapter;

/**
 * 源类
 * Class Adaptee
 */
class Adaptee
{
    //金额
    public $money = "¥40";
    //支付
    public function pay()
    {
        echo "支付金额:" . $this->money ;
    }
}