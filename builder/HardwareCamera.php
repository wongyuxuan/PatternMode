<?php
namespace builder;

/**
 * 摄像头实体类
 *
 * Class HardwareRam
 * @package builder
 */
class HardwareCamera implements HardWare
{
    public function __construct($size=6)
    {
        echo "摄像头个数：" . $size . "个 \n";
    }
}