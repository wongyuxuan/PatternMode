<?php
namespace factoryAbstractWithSimpleFactory;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:30 AM
 */
class Factory
{
    public $db= 'Mysql';

    public function createUser()
    {
        switch ($this->db){
            case 'Mysql':
                return new MysqlUser();
                break;

            case 'Oracle':
                return new OracleUser();
                break;

            default:
                throw new \Exception('不支持该数据库');
                break;
        }
    }

    public function createArticle()
    {
        switch ($this->db){
            case 'Mysql':
                return new MysqlArticle();
                break;

            case 'Oracle':
                return new OracleArticle();
                break;

            default:
                throw new \Exception('不支持该数据库');
                break;
        }
    }
}