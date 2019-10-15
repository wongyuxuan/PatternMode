<?php
namespace factoryAbstractWithSimpleFactory;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:27 AM
 */
class MysqlUser implements User
{
    public function insert()
    {
        echo '向mysql中插入user';
    }

    public function select()
    {
        echo '从mysql中查询user';
    }
}