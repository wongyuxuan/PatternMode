<?php
namespace factoryAbstractWithReflection;

use ReflectionClass;
use ReflectionException;

/**
 * 反射工厂
 *
 * Class Factory
 * @package factoryAbstractWithSimpleFactory
 */
class Factory
{
    public $db= 'Mysql';

    public $namespace = 'factoryAbstractWithReflection\\';

    public function createUser()
    {
        $classname = $this->namespace . $this->db . 'User';
        try{
            $class = new ReflectionClass($classname);
            $user = $class->newInstance();
        }catch (ReflectionException $e){
            throw new \Exception('不支持此数据库类型');
        }
        return $user;
    }

    public function createArticle()
    {
        $classname = $this->namespace . $this->db . 'Article';
        try{
            $class = new ReflectionClass($classname);
            $article = $class->newInstance();
        }catch (ReflectionException $e){
            throw new \Exception('不支持此数据库类型');
        }
        return $article;
    }
}