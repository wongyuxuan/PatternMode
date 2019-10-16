<?php
namespace builder;

/**
 * Cpu实体
 *
 * Class HardwareCpu
 */
class HardwareCpu implements HardWare
{
    public function __construct($quantity=8)
    {
        echo "cpu核心数:" . $quantity . "核\n";
    }
}