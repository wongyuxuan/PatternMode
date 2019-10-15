<?php
namespace factory;

/**
 * 除法
 *
 * Class Div
 * @package factory
 */
class Div extends Operation
{
    public function getResult()
    {
        if($this->numberB == 0){
            throw new \Exception("除数不能为0");
        }
       return $this->numberA / $this->numberB;
    }
}