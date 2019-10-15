<?php
namespace factory;

/**
 * 操作类抽象型
 */
abstract class Operation
{
    /**
     * 运算符左边的值
     */
    protected $numberA = 0;

    /**
     * 运算符右边的值
     */
    protected $numberB = 0;

    /**
     * 运算结果
     */
    abstract public function getResult();

    /**
     * 给 $numberA 赋值
     */
    public function setNumberA($number)
    {
       $this->numberA =  $number;
       return $this;
    }

    /**
     * 给 $numberB 赋值
     */
    public function setNumberB($number)
    {
        $this->numberB = $number;
        return $this;
    }
}