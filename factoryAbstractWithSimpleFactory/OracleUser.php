<?php
namespace factoryAbstractWithSimpleFactory;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:27 AM
 */
class OracleUser implements User
{
    public function insert()
    {
        echo '向oracle中插入user';
    }

    public function select()
    {
        echo '从oracle中查询user';
    }
}