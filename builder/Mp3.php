<?php
namespace builder;

/**
 * mp3类
 *
 * Class Mp3
 * @package builder
 */
class Mp3 implements ProductInterface
{
    /**
     * Mp3名称
     *
     * @var
     */
    private $_name = '';

    /**
     * 处理器
     */
    private $_cpu = '';

    /**
     * 内存
     */
    private $_ram = '';

    /**
     * 储存
     */
    private $_storage = '';

    /**
     * 系统
     */
    private $_os = '';

    public function __construct($name='', $hardware=array(), $software=array())
    {
        //名称
        $this->_name = $name;
        echo $this->_name . "配置如下: \n";
        //构建硬件
        $this->hardware($hardware);
        //构建软件
        $this->software($software);
    }

    public function hardware($hardware=array())
    {
        //创建cpu
        $this->_cpu = new HardwareCpu($hardware['cpu']);

        //创建ram
        $this->_ram = new HardwareRam($hardware['ram']);

        //创建储存
        $this->_storage = new HardwareStorage($hardware['storage']);
    }

    public function software($software=array())
    {
        // 创建操作系统
        $softwareOs     = new SoftwareOs();
        $this->_os      = $softwareOs->produce($software['os']);
    }
}