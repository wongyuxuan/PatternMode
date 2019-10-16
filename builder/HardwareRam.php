<?php
namespace builder;

/**
 * 内存实体类
 *
 * Class HardwareRam
 * @package builder
 */
class HardwareRam implements HardWare
{
    public function __construct($size=6)
    {
        echo "内存大小：" . $size . "G\n";
    }
}