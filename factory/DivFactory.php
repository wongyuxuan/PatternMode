<?php
namespace factory;

/**
 * 除法工厂
 *
 * Class DivFactory
 * @package factory
 */
class DivFactory extends Factory
{
    public function produce()
    {
        return new Div();
    }
}