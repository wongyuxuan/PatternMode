<?php
namespace factory;

/**
 * 加法工厂
 *
 * Class AddFactory
 * @package factory
 */
class AddFactory extends Factory
{
    public function produce()
    {
        return new Add();
    }
}