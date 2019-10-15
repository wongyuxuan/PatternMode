<?php
namespace factory;

/**
 * 乘法工厂
 *
 * Class MulFactory
 * @package factory
 */
class MulFactory extends Factory
{
    public function produce()
    {
        return new Mul();
    }
}