<?php
namespace factory;

/**
 * 减法工厂
 *
 * Class SubFactory
 * @package factory
 */
class SubFactory extends Factory
{
    public function produce()
    {
        return new Sub();
    }
}