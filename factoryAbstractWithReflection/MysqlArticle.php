<?php
namespace factoryAbstractWithReflection;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:27 AM
 */
class MysqlArticle implements Article
{
    public function insert()
    {
        echo '向mysql中插入article';
    }

    public function select()
    {
        echo '从mysql中查询article';
    }
}