<?php
namespace builder;

/**
 * 产品构建器
 * Class ProductBuilder
 * @package builder
 */
class ProductBuilder
{
    /**
     * 参数
     */
    private $_params = [
        'name' => '',
        'hardware' => [],
        'software' => []
    ];

    /**
     * 构造函数
     */
    public function __construct($params = [])
    {

    }

    public function getMp3($params=[])
    {
        $this->_params = $params;
        $mp3 = new Product($this->_params['name']);
        $mp3->addHardware(new HardwareCpu($this->_params['hardware']['cpu']));
        $mp3->addHardware(new HardwareRam($this->_params['hardware']['ram']));
        $mp3->addHardware(new HardwareStorage($this->_params['hardware']['storage']));
        $softwareOs = new SoftwareOs();
        $softwareOs->produce($this->_params['software']['os']);
        $mp3->addSoftware($softwareOs);
        return $mp3;
    }

    public function getPhone($params=[])
    {
        $this->_params = $params;
        $phone = new Product($this->_params['name']);
        $phone->addHardware(new HardwareCpu($this->_params['hardware']['cpu']));
        $phone->addHardware(new HardwareRam($this->_params['hardware']['ram']));
        $phone->addHardware(new HardwareStorage($this->_params['hardware']['storage']));
        $phone->addHardware(new HardwareScree($this->_params['hardware']['scree']));
        $phone->addHardware(new HardwareCamera($this->_params['hardware']['camera']));
        $softwareOs = new SoftwareOs();
        $softwareOs->produce($this->_params['software']['os']);
        $phone->addSoftware($softwareOs);
        return $phone;
    }
}