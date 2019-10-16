<?php
namespace builder;

/**
 * 手机类
 *
 * Class Phone
 * @package builder
 */
class Phone implements ProductInterface
{
    /**
     * 名称
     * @var
     */
    private $_name = '';

    /**
     * cpu
     */
    private $_cpu = '';

    /**
     * 储存
     */
    private $_storage = '';

    /**
     * 内存
     */
    private $_ram = '';

    /**
     * 摄像头
     */
    private $_camera = '';

    /**
     * 操作系统
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

    /**
     * 构建硬件
     *
     * @param array $haraware
     */
    public function hardware($hardware=array())
    {
        //创建cpu
        $this->_cpu = new HardwareCpu($hardware['cpu']);

        //创建内存
        $this->_ram = new HardwareRam($hardware['ram']);

        //创建储存
        $this->_storage = new HardwareStorage($hardware['storage']);

        //创建cpu
        $this->_camera = new HardwareCamera($hardware['camera']);
    }

    public function software($software=array())
    {
        $softwareOs     =  new SoftwareOs();
        $this->_os      =  $softwareOs->produce($software['os']);
    }
}