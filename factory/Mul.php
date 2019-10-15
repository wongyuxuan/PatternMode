<?php
namespace factory;

/**
 * 乘法
 *
 * Class Mul
 * @package factory
 */
class Mul extends Operation
{
    public function getResult()
    {
       return $this->numberA * $this->numberB;
    }
}