<?php
namespace factoryAbstract;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:34 AM
 */
class MysqlFactory implements Factory
{
    public function createUser()
    {
        return new MysqlUser();
    }

    public function createArticle()
    {
        return new MysqlArticle();
    }
}