<?php
namespace factory;

/**
 * 减法
 *
 * Class Sub
 * @package factory
 */
class Sub extends Operation
{
    public function getResult()
    {
       return $this->numberA - $this->numberB;
    }
}