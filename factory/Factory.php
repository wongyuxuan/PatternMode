<?php
namespace factory;

/**
 * 工厂抽象型
 */
abstract class Factory
{
    /**
     * 创建产品
     */
    abstract public function produce();
}