<?php
namespace builder;

/**
 * 操作系统实体
 *
 * Class SoftwareOs
 */
class SoftwareOs implements Software
{
    public function produce($os = 'ios')
    {
        echo '操作系统:' . $os . "\n";
    }
}