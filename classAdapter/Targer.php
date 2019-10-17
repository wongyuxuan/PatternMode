<?php
namespace ClassAdapter;

/**
 * 目标接口
 * Interface Targer
 * @package ClassAdapter
 */
interface Targer
{
    //支付
    public function pay();
    //通知
    public function notify();
}