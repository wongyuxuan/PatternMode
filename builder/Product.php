<?php
namespace builder;


/**
 * 产品类
 *
 * Class Product
 * @package builder
 */
class Product
{
    /**
     * 名称
     * @var string
     */
    private $_name = '';

    /**
     * 硬件
     * @var array
     */
    private $_hardwares = array();

    /**
     * 软件
     * @var array
     */
    private $_softwares = array();

    /**
     * 构造函数
     */
    public function __construct($name='')
    {
        //名称
        $this->_name = $name;
        echo $this->_name . "配置如下: \n";
    }

    /**
     * 构建硬件
     */
    public function addHardware(HardWare $instance)
    {
        $this->_hardwares[] = $instance;
    }

    /**
     * 构建软件
     */
    public function addSoftware(Software $instance)
    {
        $this->_softwares[] = $instance;
    }
}