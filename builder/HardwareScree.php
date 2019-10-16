<?php
namespace builder;

/**
 * 屏幕实体类
 *
 * Class HardwareScree
 */
class HardwareScree implements HardWare
{
  public function __construct($size=5)
  {
      echo "屏幕大小:" . $size . "寸\n";
  }
}