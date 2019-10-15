<?php
namespace factory;

/**
 * 加法
 *
 * Class Add
 * @package factory
 */
class Add extends Operation
{
    public function getResult()
    {
       return $this->numberA + $this->numberB;
    }
}