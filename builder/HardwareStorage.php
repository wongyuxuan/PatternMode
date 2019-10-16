<?php
namespace builder;

/**
 * 储存实体类
 *
 * Class HardwareStorage
 */
class HardwareStorage implements HardWare
{
  public function __construct($size=5)
  {
      echo "储存大小:" . $size . "G\n";
  }
}